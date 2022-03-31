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
use SilverStripe\Dev\BuildTask;

class Php81Task extends BuildTask
{
    public function run($request)
    {
        $this->test();
    }

    private function getCode(): string
    {
        return <<<'CODE'
        <?php

        class MyClass
        {
            public function secondMethod($foo)
            {
                $str = 'xyz';
                $a = str_replace('a', 'b', 'c');
                $b = str_replace('x', 'y', $str);
                preg_match('/g/', $str);
            }

            public function myMethod($foo)
            {
                $str = 'xyz';
                $a = str_replace('a', 'b', 'c');
                $b = str_replace('x', 'y', $xstr);
                preg_match('/g/', $xstr);
            }
        }
        CODE;
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
        return $ast;
    }

    private function dump(array $ast)
    {
        $dumper = new NodeDumper;
        echo $dumper->dump($ast) . "\n";
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
            $this->recursiveAddFuncCalls($expr->expr, $funcCalls);
        }
    }

    private function getFuncCalls(ClassMethod $method): array
    {
        $funcCalls = [];
        /** @var Expression $expression */
        foreach ($method->stmts as $expression) {
            $this->recursiveAddFuncCalls($expression->expr, $funcCalls);
        }
        return $funcCalls;
    }

    private function getFuncCallConfig(string $name)
    {
        $a = [
            'preg_match' => [2 => 'cast'],
            'str_replace' => [3 => 'ternary'] // as in string cast the 3rd arg
        ];
        return $a[$name] ?? [];
    }

    private function test()
    {
        $code = $this->getCode();
        $ast = $this->getAst($code);
        $classes = array_filter($ast, fn($v) => $v instanceof Class_);
        foreach ($classes as $class) {
            foreach ($this->getMethods($class) as $method) {
                $funcCalls = $this->getFuncCalls($method);
                $funcCalls = array_reverse($funcCalls);
                foreach ($funcCalls as $funcCall) {
                    $name = $funcCall->name->parts[0];
                    $config = $this->getFuncCallConfig($name);
                    if (empty($config)) {
                        continue;
                    }
                    $config = array_reverse($config, true);
                    foreach ($config as $argNum => $what) {
                        $a = $argNum - 1;
                        /** @var Arg $arg */
                        $arg = $funcCall->args[$a];
                        if (!($arg->value instanceof Variable)) {
                            continue;
                        }
                        /** @var Variable $variable */
                        $variable = $arg->value;
                        if ($what == 'cast') {
                            $code = implode('', [
                                substr($code, 0, $variable->getStartFilePos()),
                                '(string) ',
                                substr($code, $variable->getStartFilePos()),
                            ]);
                        } elseif ($what == 'ternary') {
                            echo $variable->getEndFilePos() . "\n";
                            $code = implode('', [
                                substr($code, 0, $variable->getEndFilePos() + 1),
                                " ?: ''",
                                substr($code, $variable->getEndFilePos() + 1),
                            ]);
                        }
                    }
                }
            }
        }
        echo $code;
        // print_r($ast);
    }
}
