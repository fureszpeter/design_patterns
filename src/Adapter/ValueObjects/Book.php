<?php

namespace Foo\Adapter\ValueObjects;

use Foo\Adapter\Contracts\BookInterface;

class Book implements BookInterface
{
    public function open()
    {
       echo 'Opening the book' . PHP_EOL;
    }

    public function turnPage()
    {
        echo 'Turning the page' . PHP_EOL;
    }
}
