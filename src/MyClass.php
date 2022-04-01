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
        // $a = str_replace('a', 'b', 'c');
        // $b = str_replace('x', 'y', $str);
        preg_match('/g/', $str);
    }

    private $xstr = '';

    public function myMethod($foo)
    {
        $xstr = 'xyz';
        $a = str_replace('a', 'b', 'c');
        $b = str_replace('x', 'y', $xstr ?: '');
        if (str_replace('1', '2', $xstr) == 'def' || strtoupper($xstr) == 'DEF' || strtolower($xstr) == 'def') {
            $xstr = 1;
        }
        preg_match('/g/', (string) $xstr);
        preg_match('/g/', $this->xstr);
        preg_match('/g/', $abc . $def);
        $base = basename($this->upLevels($pathname, $depth - 1));
        str_replace('a', 'b', php_sapi_name());
        $type = trim($type);
        $class = str_replace(' ', '', ucwords($type));
        $class = str_replace(' ', '', str_replace('a', 'b', $type));
        $class = str_replace(' ', '', ucwords($type));
        rtrim(parse_url($base, PHP_URL_PATH), '/');
        
        // Replace all `*` with `[^\.][a-zA-Z0-9\-_\/\.]+`, and quote other characters
        $patternRegExp = '%(^|[/\\\\])'.implode(
            '[^\.][a-zA-Z0-9\-_\/\.]+',
            array_map(
                function ($part) {
                    return preg_quote($part, '%');
                },
                explode('*', trim($pattern, '/\\'))
            )
        ).'([./\\\\]|$)%';

        $summary = preg_replace(
            '/' . preg_quote($stringPiece, '/') . '/i',
            '<mark>$0</mark>',
            $summary
        );

        $summary = preg_replace('/' . preg_quote($stringPiece, '/') . '/i',
            '<mark>$0</mark>',
            $summary
        );

        preg_replace($this->filterPattern, '', $first) === preg_replace($this->filterPattern, '', $second);

        str_replace(' ', '', ucwords($a)) . ucwords(str_replace(' ', '', $b));

    }
}