<?php

class MyClass implements Iterator
{
    /**
     * abc
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return '';
    }

    public function key()
    {
        return '';
    }

    public function valid(): bool
    {
        return true;
    }

    public function next()
    {
        return '';
    }

    public function rewind()
    {
        return '';
    }

    public function secondMethod($foo)
    {
        $str = 'xyz';
        $a = str_replace('a', 'b', 'c');
        $b = str_replace('x', 'y', $str);
        preg_match('/g/', $str);
    }

    public function myMethod($foo)
    {
        $xstr = 'xyz';
        $a = str_replace('a', 'b', 'c');
        $b = str_replace('x', 'y', $xstr ?: '');
        preg_match('/g/', (string) $xstr);
    }
}