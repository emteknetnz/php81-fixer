<?php

use PhpParser\Error;
use PhpParser\Lexer;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\NodeDumper;
use PhpParser\ParserFactory;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\Namespace_;
use SilverStripe\Dev\BuildTask;

class Php81Task extends BuildTask
{
    private const ATTRIBUTES_CONFIG = [
        // do not prefix interfaces with backslash, class_implements() always returns without them
        'Iterator' => [
            'current',
            'key',
            'valid',
            'rewind',
            'next'
        ],
        'IteratorAggregate' => [
            // use lowercase method names
            'getiterator'
        ],
        'Countable' => [
            'count'
        ],
        'ArrayAccess' => [
            'offsetexists',
            'offsetgets',
            'offsetset',
            'offsetoffset',
        ],
    ];

    private const FUNC_CALL_CONFIG = [
        // [$argPos => 'cast|ternary'] - where $argPos is 1 indexed i.e. first arg = 1, not 0'
        'explode' => [2 => 'cast'],
        'html_entity_decode' => [1 => 'cast'],
        'htmlentities' => [1 => 'cast'],
        'htmlspecialchars' => [1 => 'cast'],
        'implode' => [2 => 'ternary-array'],
        'lcfirst' => [1 => 'cast'],
        'ltrim' => [1 => 'cast'],
        'nl2br' => [1 => 'cast'],
        'number_format' => [1 => 'cast-float'],
        'parse_str' => [1 => 'cast'],
        'rtrim' => [1 => 'cast'],
        'str_contains' => [1 => 'cast', 2 => 'cast'],
        'str_pad' => [1 => 'cast'],
        'str_replace' => [3 => 'ternary'],
        'str_split' => [1 => 'cast'],
        'strcasecmp' => [1 => 'cast', 2 => 'cast'],
        'strcmp' => [1 => 'cast', 2 => 'cast'],
        'strip_tags' => [1 => 'cast'],
        'stripcslashes' => [1 => 'cast'],
        'stripos' => [1 => 'cast', 2 => 'cast'],
        'stripslashes' => [1 => 'cast'],
        'stristr' => [1 => 'cast', 2 => 'cast'],
        'strlen' => [1 => 'cast'],
        'strpos' => [1 => 'cast', 2 => 'cast'],
        'strrchr' => [1 => 'cast', 2 => 'cast'],
        'strripos' => [1 => 'cast', 2 => 'cast'],
        'strrpos' => [1 => 'cast', 2 => 'cast'],
        'strstr' => [1 => 'cast', 2 => 'cast'],
        'strtok' => [1 => 'cast', 2 => 'cast'],
        'strtolower' => [1 => 'cast'],
        'strtoupper' => [1 => 'cast'],
        'strtr' => [1 => 'cast', 2 => 'cast', 3 => 'cast'],
        'substr' => [1 => 'cast'],
        'trim' => [1 => 'cast'],
        'ucfirst' => [1 => 'cast'],
        'ucwords' => [1 => 'cast'],
        'preg_match' => [2 => 'cast'],
        'preg_quote' => [1 => 'cast'],
        'preg_replace' => [3 => 'ternary'],
        'preg_replace_callback' => [3 => 'ternary'],
        'preg_split' => [2 => 'cast'],
    ];

    public function run($request)
    {
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

    private function getSampleCode(): string
    {
        return file_get_contents(__DIR__ . '/MyClass.php');
    }

    private function getAst(string $code): array
    {
        $lexer = new Lexer([
            'usedAttributes' => [
                'comments',
                //'startLine',
                //'endLine',
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
        // print_r($ast);
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

    private function recursiveAddFuncCalls(Expr $expr, array &$funcCalls): void
    {
        if ($expr instanceof FuncCall) {
            $funcCalls[] = $expr;
        }
        if (property_exists($expr, 'expr')) {
            if (is_null($expr->expr)) {
                return;
            }
            $this->recursiveAddFuncCalls($expr->expr, $funcCalls);
        }
    }

    private function getFuncCalls(ClassMethod $method): array
    {
        $funcCalls = [];
        /** @var Expression $expression */
        foreach ($method->stmts ?? [] as $expression) {
            if (is_null($expression->expr ?? null)) {
                continue;
            }
            $this->recursiveAddFuncCalls($expression->expr, $funcCalls);
        }
        return $funcCalls;
    }

    private function getFuncCallConfig(string $name)
    {
        return self::FUNC_CALL_CONFIG[$name] ?? [];
    }

    private function rewriteCode(string $code): string
    {
        $code = $this->rewriteArguments($code);
        $code = $this->addMethodAttributes($code);
        return $code;
    }

    private function getAttributesConfig(?Namespace_ $namespace, Class_ $class): array
    {
        $ret = [];
        $fqcn = implode('\\', $namespace->name->parts ?? []) . '\\' . $class->name->name;
        $fqcn = ltrim($fqcn, '\\');
        foreach (self::ATTRIBUTES_CONFIG as $interface => $methods) {
            $implements = @class_implements($fqcn);
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

    private function rewriteArguments(string $code): string
    {
        $ast = $this->getAst($code);
        $classes = $this->getClasses($ast);
        $classes = array_reverse($classes);
        foreach ($classes as $class) {
            $methods = $this->getMethods($class);
            $methods = array_reverse($methods);
            foreach ($methods as $method) {
                $funcCalls = $this->getFuncCalls($method);
                $funcCalls = array_reverse($funcCalls);
                foreach ($funcCalls as $funcCall) {
                    $name = $funcCall->name->parts[0] ?? '';
                    $config = $this->getFuncCallConfig($name);
                    if (empty($config)) {
                        continue;
                    }
                    $config = array_reverse($config, true);
                    foreach ($config as $argNum => $what) {
                        $a = $argNum - 1;
                        /** @var Arg $arg */
                        $arg = $funcCall->args[$a] ?? null;
                        if (!($arg->value ?? null instanceof Variable)) {
                            continue;
                        }
                        /** @var Variable $variable */
                        $variable = $arg->value;
                        $a = explode('-', $what);
                        $what = $a[0];
                        $type = $a[1] ?? 'string';
                        if ($what == 'cast') {
                            $code = implode('', [
                                substr($code, 0, $variable->getStartFilePos()),
                                "($type) ",
                                substr($code, $variable->getStartFilePos()),
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
                                substr($code, 0, $variable->getEndFilePos() + 1),
                                " ?: $v",
                                substr($code, $variable->getEndFilePos() + 1),
                            ]);
                        }
                    }
                }
            }
        }
        return $code;
    }
}
