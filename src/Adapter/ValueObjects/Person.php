<?php

namespace Foo\Adapter\ValueObjects;

use Foo\Adapter\Contracts\BookInterface;

class Person
{
    /**
     * @param BookInterface $book
     */
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}
