<?php

use PhpParser\Error;
use PhpParser\Lexer;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\ParserFactory;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\If_;
use PhpParser\Node\Stmt\Namespace_;
use SilverStripe\Dev\BuildTask;

class Php81Task extends BuildTask
{
    private function getSampleCode(): string
    {
        return str_replace(["<<<'CLASS'", 'CLASS;'], '', file_get_contents(__DIR__ . '/MyClass.php'));
    }

    public function run($request)
    {
        $useSampleCode = false; // sboyd
        if ($useSampleCode) {
            $code = $this->getSampleCode();
            $code = $this->rewriteCode($code, '');
            echo $code;
            echo "\n";
        } else {
            $vendorDirs = [
                BASE_PATH . '/vendor/dnadesign',
                BASE_PATH . '/vendor/silverstripe',
                BASE_PATH . '/vendor/symbiote',
                BASE_PATH . '/vendor/bringyourownideas',
                // BASE_PATH . '/vendor/colymba',
                // BASE_PATH . '/vendor/cwp',
                // BASE_PATH . '/vendor/tractorcow',
            ];
            foreach ($vendorDirs as $vendorDir) {
                if (!file_exists($vendorDir)) {
                    continue;
                }
                foreach (scandir($vendorDir) as $subdir) {
                    if (in_array($subdir, ['.', '..'])) {
                        continue;
                    }
                    $dir = "$vendorDir/$subdir";
                    foreach (['src', 'code', 'tests', 'thirdparty'] as $d) {
                        $subdir = "$dir/$d";
                        if (file_exists($subdir)) {
                            $this->update($subdir);
                        }
                    }
                }
            }
        }
    }

    public function update(string $dir)
    {
        $paths = explode("\n", shell_exec("find $dir | grep .php"));
        $paths = array_filter($paths, fn($f) => strtolower(pathinfo($f, PATHINFO_EXTENSION)) == 'php');
        foreach ($paths as $path) {
            if (is_dir($path)) {
                continue;
            }
            // <<
            // if (does any military use intervention 
            // <<
            $originalCode = file_get_contents($path);
            $newCode = $this->rewriteCode($originalCode, $path);
            if ($originalCode != $newCode) {
                file_put_contents($path, $newCode);
                echo "Updated code in $path\n";
            } else {
                // echo "No changes made in $path\n";
            }
        }
    }

    private function rewriteCode(string $code, string $path): string
    {
        $code = $this->rewriteSpecificFiles($code, $path);
        file_put_contents(BASE_PATH . '/out.php', $code);
        // only rewrite a single func+argNum at a time.  Reason for this is that
        // nested, funcCalls have too many edge cases to manage impossible to manage
        $config = $this->getSimpleFuncCallConfig();
        foreach (array_keys($config) as $type) {
            foreach ($config[$type] as $func => $argNums) {
                if (strpos($code, $func) === false) {
                    continue;
                }
                foreach ($argNums as $argNum) {
                    for ($i = 0; $i <= 1000; $i++) {
                        $oldCode = $code;
                        $code = $this->rewriteArguments($code, $type, $func, $argNum);
                        // output to temp file in case it gets mangled, makes diagnosing much easier
                        file_put_contents(BASE_PATH . '/out.php', $code);
                        if ($code == $oldCode) {
                            break;
                        }
                        if ($i == 1000) {
                            echo "Reached 1000 iterations, something probably went wrong, exiting\n";
                            exit;
                        }
                    }
                }
            }
        }
        $code = $this->addMethodAttributes($code);
        file_put_contents(BASE_PATH . '/out.php', $code);
        return $code;
    }

    private function getAst(string $code): array
    {
        $lexer = new Lexer([
            'usedAttributes' => [
                'comments',
                'startLine',
                'endLine',
                //'startTokenPos',
                //'endTokenPos',
                'startFilePos',
                'endFilePos'
            ]
        ]);
        $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7, $lexer);
        try {
            $ast = $parser->parse($code);
        } catch (Error $error) {
            echo "Parse error: {$error->getMessage()}\n";
            die;
        }
        return $ast;
    }

    private function getNamespace(array $ast): ?Namespace_
    {
        return ($ast[0] ?? null) instanceof Namespace_ ? $ast[0] : null;
    }

    private function getClasses(array $ast): array
    {
        $ret = [];
        $a = ($ast[0] ?? null) instanceof Namespace_ ? $ast[0]->stmts : $ast;
        $ret = array_merge($ret, array_filter($a, fn($v) => $v instanceof Class_));
        // SapphireTest and other file with dual classes
        $i = array_filter($a, fn($v) => $v instanceof If_);
        foreach ($i as $if) {
            foreach ($if->stmts ?? [] as $v) {
                if ($v instanceof Class_) {
                    $ret[] = $v;
                }
            }
        }
        return $ret;
    }

    private function getMethods(Class_ $class): array
    {
        return array_filter($class->stmts, fn($v) => $v instanceof ClassMethod);
    }

    private function recursiveAddFuncCalls($thingy, array &$funcCalls): void
    {
        $things = is_array($thingy) ? $thingy : [$thingy];
        foreach ($things as $thing) {
            if ($thing instanceof FuncCall) {
                $funcCalls[] = $thing;
                foreach ($thing->args ?? [] as $arg) {
                    $this->recursiveAddFuncCalls($arg, $funcCalls);
                }
            }
            if (is_object($thing)) {
                foreach (['expr', 'stmts', 'cond', 'else', 'elseifs', 'left', 'right', 'value'] as $property) {
                    if (property_exists($thing, $property) && !is_null($thing->{$property})) {
                        if (is_array($thing->{$property})) {
                            foreach ($thing->{$property} as $thang) {
                                $this->recursiveAddFuncCalls($thang, $funcCalls);
                            }
                        } else {
                            $this->recursiveAddFuncCalls($thing->{$property}, $funcCalls);
                        }
                    }
                }
            }
        }
    }

    private function getFuncCalls($thing): array
    {
        $funcCalls = [];
        if (is_array($thing)) {
            // passing in an ast for a nonclass file
            $newThing = new stdClass();
            $newThing->stmts = $thing;
            $thing = $newThing;
        }
        foreach ($thing->stmts ?? [] as $stmts) {
            $this->recursiveAddFuncCalls($stmts, $funcCalls);
        }
        return $funcCalls;
    }

    private function getAttributesConfig(?Namespace_ $namespace, Class_ $class): array
    {
        $ret = [];
        $fqcn = implode('\\', $namespace->name->parts ?? []) . '\\' . $class->name->name;
        $fqcn = ltrim($fqcn, '\\');
        foreach (Php81Consts::ATTRIBUTES_CONFIG as $interface => $methods) {
            try {
                $implements = @class_implements($fqcn);
            } catch (\Error|\Exception $e) {
                continue;
            }
            if ($implements === false) {
                continue;
            }
            if (!in_array($interface, $implements)) {
                continue;
            }
            $ret = array_merge($ret, $methods);
        }
        return $ret;
    }

    private function addMethodAttributes(string $code): string
    {
        $ast = $this->getAst($code);
        $namespace = $this->getNamespace($ast);
        $classes = $this->getClasses($ast);
        foreach ($classes as $class) {
            $config = $this->getAttributesConfig($namespace, $class);
            $methods = $this->getMethods($class);
            // reverse methods so 'updating from the bottom' so that character offests remain correct
            $methods = array_reverse($methods);
            foreach ($methods as $method) {
                $name = strtolower($method->name->name);
                if (!in_array($name, $config)) {
                    continue;
                }
                if (!is_null($method->returnType)) {
                    continue;
                }
                $hasAttribute = false;
                foreach ($method->getComments() as $comment) {
                    if ($comment->getText() == '#[\ReturnTypeWillChange]') {
                        $hasAttribute = true;
                        break;
                    }
                }
                if ($hasAttribute) {
                    continue;
                }
                $code = implode('', [
                    substr($code, 0, $method->getStartFilePos()),
                    "#[\ReturnTypeWillChange]\n    ",
                    substr($code, $method->getStartFilePos()),
                ]);
            }
        }
        return $code;
    }

    private function getSimpleFuncCallConfig()
    {
        $ret = [];
        foreach (Php81Consts::FUNC_CALL_CONFIG as $func => $arr) {
            foreach ($arr['params'] as $paramNum => $param) {
                $what = strpos($param['whatType'], 'ternary') !== false ? 'ternary' : 'cast';
                $ret[$what][$func] ??= [];
                $ret[$what][$func][] = $paramNum;
            }
        }
        return $ret;
    }

    private function rewriteArguments(
        string $code,
        string $_what,
        string $_func,
        int $_argNum
    ): string {
        $ast = $this->getAst($code);
        $classes = $this->getClasses($ast);
        if (empty($classes)) {
            $classes = ['nonclass'];
        }
        foreach ($classes as $class) {
            if ($class == 'nonclass') {
                $methods = ['nonclass'];
            } else {
                $methods = $this->getMethods($class);
            }
            foreach ($methods as $method) {
                if ($method == 'nonclass') {
                    $funcCalls = $this->getFuncCalls($ast);
                } else {
                    $funcCalls = $this->getFuncCalls($method);
                }
                foreach ($funcCalls as $funcCall) {
                    $func = $funcCall->name->parts[0] ?? '';
                    $funcCallConfig = Php81Consts::FUNC_CALL_CONFIG[$func] ?? [];
                    if (empty($funcCallConfig)) {
                        continue;
                    }
                    foreach ($funcCallConfig['params'] as $argNum => $paramConfig) {
                        if (!$paramConfig['rewrite']) {
                            continue;
                        }
                        $tmp = explode('-', $paramConfig['whatType']);
                        $what = $tmp[0];
                        $type = $tmp[1] ?? 'string';
                        if ($_what != $what || $_func != $func || $_argNum != $argNum) {
                            continue;
                        }
                        /** @var Arg $arg */
                        $arg = $funcCall->args[$argNum] ?? null;
                        $value = $arg->value ?? null;
                        if (!($value instanceof Variable)) {
                            if (!($value instanceof PropertyFetch)) {
                                if (!($value instanceof MethodCall)) {
                                    if (!($value instanceof FuncCall)) {
                                        if (!($value instanceof StaticCall)) {
                                            if (!($value instanceof ConstFetch)) {
                                                if (!($value instanceof ClassConstFetch)) {
                                                    continue;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        if ($value instanceof FuncCall) {
                            $innerFunc = $value->name->parts[0];
                            $innerFuncCallConfig = Php81Consts::FUNC_CALL_CONFIG[$innerFunc] ?? [];
                            if (!empty($innerFuncCallConfig)) {
                                if ($innerFuncCallConfig['return']['singleType']) {
                                    continue;
                                }
                            };
                        }
                        if ($value instanceof ConstFetch) {
                            if (defined($value->name->parts[0] ?? '')) {
                                continue;
                            }
                        }
                        if (!($value instanceof StaticCall)) {
                            if (($value->name->name ?? '') == 'class') {
                                // e.g. SiteTree::class
                                continue;
                            }
                        }
                        // hardcode to only use null coalescing operator
                        $what = 'ternary';
                        /** @var Expr $expr */
                        $expr = $arg->value;
                        if ($what == 'cast') {
                            $code = implode('', [
                                substr($code, 0, $expr->getStartFilePos()),
                                "($type) ",
                                substr($code, $expr->getStartFilePos()),
                            ]);
                            return $code;
                        } elseif ($what == 'ternary') {
                            // despite it being called 'ternary', it's actually the null coalescing operator
                            // $a = null; $a ?? 'abc' becomes 'abc'
                            // $a = false; $a ?? 'abc' becomes false
                            // Needed for passing something like 0 (int) into preg_replace 3rd param
                            // which is string|array. 0 ?: '' will turn into '', causing a regression,
                            // 0 ?? '' will throw a deprecation warning, which we need to manually fix
                            $a = [
                                'string' => "''",
                                'bool' => 'false',
                                'int' => '0',
                                'float' => '0.0',
                                'array' => '[]',
                            ];
                            $v = $a[$type];
                            $code = implode('', [
                                substr($code, 0, $expr->getEndFilePos() + 1),
                                " ?? $v",
                                substr($code, $expr->getEndFilePos() + 1),
                            ]);
                            return $code;
                        }
                    }
                }
            }
        }
        return $code;
    }

    private function rewriteSpecificFiles(string $code, string $path): string
    {
        if (strpos($path, 'framework/src/ORM/FieldType/DBText.php') !== false) {
            $find = '$position = max(0, $position - ($characters / 2));';
            $replace = '$position = floor(max(0, $position - $characters / 2));';
            $code = str_replace($find, $replace, $code);
        }

        if (strpos($path, 'assets/src/Folder.php') !== false) {
            // doesn't automatically find this because parent func_call is variadic
            $find = 'Convert::raw2att(preg_replace(\'~\R~u\', \' \', $this->Title))';
            $replace = 'Convert::raw2att(preg_replace(\'~\R~u\', \' \', $this->Title ?: \'\'))';
            $code = str_replace($find, $replace, $code);
        }

        if (strpos($path, 'mfa/src/Store/SessionStore.php') !== false) {
            $find = <<<'EOT'
            public function serialize(): string
                {
                    // Use the stored member ID by default. We should do this because we can avoid ever fetching the member object
                    // from the database if the member was never accessed during this request.
                    $memberID = $this->memberID;

                    if (!$memberID && ($member = $this->getMember())) {
                        $memberID = $this->getMember()->ID;
                    }

                    $stuff = json_encode([
                        'member' => $memberID,
                        'method' => $this->getMethod(),
                        'state' => $this->getState(),
                        'verifiedMethods' => $this->getVerifiedMethods(),
                    ]);

                    if (!$stuff) {
                        throw new RuntimeException(json_last_error_msg());
                    }

                    return $stuff;
                }

                public function unserialize($serialized): void
                {
                    $state = json_decode($serialized, true);

                    if (is_array($state) && $state['member']) {
                        $this->memberID = $state['member'];
                        $this->setMethod($state['method']);
                        $this->setState($state['state']);

                        foreach ($state['verifiedMethods'] as $method) {
                            $this->addVerifiedMethod($method);
                        }
                    }
                }
            EOT;
            $replace = <<<'EOT'
            public function __serialize(): array
                {
                    // Use the stored member ID by default.
                    // We should do this because we can avoid ever fetching the member object
                    // from the database if the member was never accessed during this request.
                    $memberID = $this->memberID;

                    if (!$memberID && ($member = $this->getMember())) {
                        $memberID = $this->getMember()->ID;
                    }

                    return [
                        'member' => $memberID,
                        'method' => $this->getMethod(),
                        'state' => $this->getState(),
                        'verifiedMethods' => $this->getVerifiedMethods(),
                    ];
                }

                public function __unserialize(array $data): void
                {
                    $this->memberID = $data['member'];
                    $this->setMethod($data['method']);
                    $this->setState($data['state']);
                    foreach ($data['verifiedMethods'] as $method) {
                        $this->addVerifiedMethod($method);
                    }
                }

                /**
                 * The __serialize() magic method will be automatically used instead of this
                 *
                 * @return string
                 * @deprecated will be removed in 5.0
                 */
                public function serialize(): string
                {
                    $data = $this->__serialize();
                    $str = json_encode($data);
                    if (!$str) {
                        throw new RuntimeException(json_last_error_msg());
                    }
                    return $str;
                }
            
                /**
                 * The __unserialize() magic method will be automatically used instead of this almost all the time
                 * This method will be automatically used if existing serialized data was not saved as an associative array
                 * and the PHP version used in less than PHP 9.0
                 *
                 * @param string $serialized
                 * @deprecated will be removed in 5.0
                 */
                public function unserialize($serialized): void
                {
                    $data = json_decode($serialized, true);
                    $this->__unserialize($data);
                }
            EOT;
            $code = str_replace($find, $replace, $code);
        }

        if (strpos($path, 'webauthn-authenticator/src/CredentialRepository.php') !== false) {
            $find = <<<'EOT'
            public function serialize()
                {
                    return json_encode(['credentials' => $this->toArray(), 'memberID' => $this->memberID]);
                }

                public function unserialize($serialized)
                {
                    $raw = json_decode($serialized, true);

                    $this->memberID = $raw['memberID'];
                    $this->setCredentials($raw['credentials']);
                }
            EOT;
            $replace = <<<'EOT'
            public function __serialize(): array
                {
                    return [
                        'memberID' => $this->memberID,
                        'credentials' => $this->toArray()
                    ];
                }

                public function __unserialize(array $data): void
                {
                    $this->memberID = $data['memberID'];
                    $this->setCredentials($data['credentials']);
                }

                /**
                 * The __serialize() magic method will be automatically used instead of this
                 *
                 * @return string
                 * @deprecated will be removed in 5.0
                 */
                public function serialize()
                {
                    return json_encode($this->__serialize());
                }

                /**
                 * The __unserialize() magic method will be automatically used instead of this almost all the time
                 * This method will be automatically used if existing serialized data was not saved as an associative array
                 * and the PHP version used in less than PHP 9.0
                 *
                 * @param string $serialized
                 * @deprecated will be removed in 5.0
                 */
                public function unserialize($serialized)
                {
                    $this->__unserialize(json_decode($serialized, true));
                }
            EOT;
            $code = str_replace($find, $replace, $code);
        }


        if (strpos($path, 'silverstripe-queuedjobs/src/Jobs/DoormanQueuedJobTask.php') !== false) {
            $find = <<<'EOT'
            /**
                 * @inheritdoc
                 *
                 * @return string
                 */
                public function serialize()
                {
                    return serialize(array(
                        'descriptor' => $this->descriptor->ID,
                    ));
                }

                /**
                 * @inheritdoc
                 *
                 * @throws InvalidArgumentException
                 * @param string
                 */
                public function unserialize($serialized)
                {
                    $data = unserialize($serialized);

                    if (!isset($data['descriptor'])) {
                        throw new InvalidArgumentException('Malformed data');
                    }

                    $descriptor = QueuedJobDescriptor::get()
                        ->filter('ID', $data['descriptor'])
                        ->first();

                    if (!$descriptor) {
                        throw new InvalidArgumentException('Descriptor not found');
                    }

                    $this->descriptor = $descriptor;
                }
            EOT;
            $replace = <<<'EOT'
            public function __serialize(): array
                {
                    return [
                        'descriptor' => $this->descriptor->ID,
                    ];
                }

                public function __unserialize(array $data): void
                {
                    if (!isset($data['descriptor'])) {
                        throw new InvalidArgumentException('Malformed data');
                    }
                    $descriptor = QueuedJobDescriptor::get()
                        ->filter('ID', $data['descriptor'])
                        ->first();
                    if (!$descriptor) {
                        throw new InvalidArgumentException('Descriptor not found');
                    }
                    $this->descriptor = $descriptor;
                }

                /**
                 * The __serialize() magic method will be automatically used instead of this
                 *
                 * @inheritdoc
                 *
                 * @return string
                 * @deprecated will be removed in 5.0
                 */
                public function serialize()
                {
                    return serialize($this->__serialize);
                }

                /**
                 * The __unserialize() magic method will be automatically used instead of this almost all the time
                 * This method will be automatically used if existing serialized data was not saved as an associative array
                 * and the PHP version used in less than PHP 9.0
                 *
                 * @inheritdoc
                 *
                 * @throws InvalidArgumentException
                 * @param string
                 * @deprecated will be removed in 5.0
                 */
                public function unserialize($serialized)
                {
                    $data = unserialize($serialized);
                    $this->__unserialize($data);
                }
            EOT;
            $code = str_replace($find, $replace, $code);
        }

        if (strpos($path, 'framework/src/ORM/Queries/SQLConditionalExpression.php') !== false) {
            $find = '$halfway = count($array ?: []) / 2;';
            $replace = '$halfway = floor(count($array ?: []) / 2);';
            $code = str_replace($find, $replace, $code);
        }

        if (strpos($path, 'framework/src/Control/HTTP.php') !== false) {
            $find = 'http_build_query($params, null, $separator)';
            $replace = 'http_build_query($params, \'\', $separator)';
            $code = str_replace($find, $replace, $code);
        }

        return $code;
    }
}
