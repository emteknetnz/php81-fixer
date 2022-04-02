<?php

use PhpParser\Error;
use PhpParser\Lexer;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\Variable;
use PhpParser\ParserFactory;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
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
            $code = $this->rewriteCode($code);
            echo $code;
            echo "\n";
        } else {
            $vendorDirs = [
                BASE_PATH . '/vendor/dnadesign',
                BASE_PATH . '/vendor/silverstripe',
                BASE_PATH . '/vendor/symbiote',
                BASE_PATH . '/vendor/bringyourownideas',
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
                    foreach (['src', 'code', 'tests'] as $d) {
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
        $paths = array_filter($paths);
        foreach ($paths as $path) {
            if (is_dir($path)) {
                continue;
            }
            $originalCode = file_get_contents($path);
            $newCode = $this->rewriteCode($originalCode);
            if ($originalCode != $newCode) {
                file_put_contents($path, $newCode);
                echo "Updated code in $path\n";
            } else {
                // echo "No changes made in $path\n";
            }
        }
    }

    private function rewriteCode(string $code): string
    {
        $code = $this->rewriteArguments($code, 'cast');
        // output to temp file in case it gets mangled, makes diagnosing much easier
        file_put_contents(BASE_PATH . '/out.php', $code);
        // only rewrite a single ternary func+argNum at a time.  Reason for this is that
        // nested, multiline funcCall's that include ternarys because impossible to manage
        $ternaryConfig = $this->getFuncCallTernaryConfig();
        foreach ($ternaryConfig as $func => $argNums) {
            foreach ($argNums as $argNum) {
                for ($i = 0; $i <= 1000; $i++) {
                    $oldCode = $code;
                    $code = $this->rewriteArguments($code, 'ternary', $func, $argNum);
                    if ($code == $oldCode) {
                        break;
                    }
                    if ($i == 1000) {
                        echo "Reached 1000 iterations, something probably went wrong, exiting\n";
                        exit;
                    }
                }
                file_put_contents(BASE_PATH . '/out.php', $code);
            }
        }
        $code = $this->addMethodAttributes($code);
        $code = $this->rewriteGetHierarchyBaseClass($code);
        return $code;
    }

    // rewrite Hierarchy::getHierarchyBaseClass()
    private function rewriteGetHierarchyBaseClass(string $code): string
    {
        $find = 'while ($ancestorClass && !Extensible::has_extension($ancestorClass, self::class)) {';
        $replace = <<<'EOT'
        while (
                    $ancestorClass &&
                    method_exists($ancestorClass, 'has_extension') &&
                    !call_user_func("$ancestorClass::has_extension", $ancestorClass, self::class)
                ) {
        EOT;
        return str_replace($find, $replace, $code);
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
        $a = ($ast[0] ?? null) instanceof Namespace_ ? $ast[0]->stmts : $ast;
        return array_filter($a, fn($v) => $v instanceof Class_);
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
                foreach (['expr', 'cond', 'left', 'right', 'value'] as $property) {
                    if (property_exists($thing, $property) && !is_null($thing->{$property})) {
                        $this->recursiveAddFuncCalls($thing->{$property}, $funcCalls);
                    }
                }
            }
            if (!is_null($thing->stmts ?? null)) {
                foreach ($thing->stmts as $stmt) {
                    $this->recursiveAddFuncCalls($stmt, $funcCalls);
                };
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
        $classes = array_reverse($classes);
        foreach ($classes as $class) {
            $config = $this->getAttributesConfig($namespace, $class);
            $methods = $this->getMethods($class);
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

    private function getFuncCallTernaryConfig()
    {
        $ret = [];
        // '_' => [
        //     'return' => [
        //         'singleType' => true,
        //         'type' => 'string',
        //     ],
        //     'params' => [
        //         [
        //             'rewrite' => true,
        //             'whatType' => 'cast-string',
        //             'name' => 'message',
        //             'type' => 'string',
        //         ],
        //     ],
        // ],
        foreach (Php81Consts::FUNC_CALL_CONFIG as $func => $arr) {
            // $params = array_reverse($arr['params']);
            foreach ($arr['params'] as $paramNum => $param) {
                if (strpos($param['whatType'], 'ternary') !== false) {
                    $ret[$func] ??= [];
                    $ret[$func][] = $paramNum;
                }
            }
        }
        return $ret;
    }

    private function rewriteArguments(
        string $code,
        string $_what,
        string $_func = '',
        int $_argNum = -1
    ): string {
        $ast = $this->getAst($code);
        $classes = $this->getClasses($ast);
        $classes = array_reverse($classes);
        if (empty($classes)) {
            $classes = ['nonclass'];
        }
        foreach ($classes as $class) {
            if ($class == 'nonclass') {
                $methods = ['nonclass'];
            } else {
                $methods = $this->getMethods($class);
                $methods = array_reverse($methods);
            }
            foreach ($methods as $method) {
                if ($method == 'nonclass') {
                    $funcCalls = $this->getFuncCalls($ast);
                } else {
                    $funcCalls = $this->getFuncCalls($method);
                }
                $funcCalls = array_reverse($funcCalls);
                foreach ($funcCalls as $funcCall) {
                    $func = $funcCall->name->parts[0] ?? '';
                    $funcCallConfig = Php81Consts::FUNC_CALL_CONFIG[$func] ?? [];
                    if (empty($funcCallConfig)) {
                        continue;
                    }
                    $funcCallConfig['params'] = array_reverse($funcCallConfig['params'], true);
                    foreach ($funcCallConfig['params'] as $argNum => $paramConfig) {
                        if (!$paramConfig['rewrite']) {
                            continue;
                        }
                        $tmp = explode('-', $paramConfig['whatType']);
                        $what = $tmp[0];
                        $type = $tmp[1] ?? 'string';
                        if ($_what != $what) {
                            continue;
                        }
                        if ($_what == 'ternary') {
                            if ($_func != $func || $_argNum != $argNum) {
                                continue;
                            }
                        }
                        /** @var Arg $arg */
                        $arg = $funcCall->args[$argNum] ?? null;
                        $value = $arg->value ?? null;
                        if (!($value instanceof Variable)) {
                            if (!($value instanceof PropertyFetch)) {
                                if (!($value instanceof MethodCall)) {
                                    if (!($value instanceof FuncCall)) {
                                        continue;
                                    }
                                }
                            }
                        }
                        /** @var Expr $expr */
                        $expr = $arg->value;
                        if ($what == 'cast') {
                            $code = implode('', [
                                substr($code, 0, $expr->getStartFilePos()),
                                "($type) ",
                                substr($code, $expr->getStartFilePos()),
                            ]);
                        } elseif ($what == 'ternary') {
                            $a = [
                                'string' => "''",
                                'int' => '0',
                                'float' => '0.0',
                                'array' => '[]'
                            ];
                            $v = $a[$type];
                            $code = implode('', [
                                substr($code, 0, $expr->getEndFilePos() + 1),
                                " ?: $v",
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
}
