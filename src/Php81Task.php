<?php

use SilverStripe\Dev\BuildTask;
use PhpParser\Error;
use PhpParser\NodeDumper;
use PhpParser\ParserFactory;

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
            public function myMethod($foo)
            {
                $str = 'xyz';
                $a = str_replace('a', 'b', 'c');
                $b = str_replace('x', 'y', $str);
                str_replace('g', 'h', $str);
            }
        }
        CODE;
    }

    private function getAst(): array
    {
        $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
        try {
            $ast = $parser->parse($this->getCode());
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

    private function test()
    {
        $ast = $this->getAst();
        print_r($ast);
    }
}
