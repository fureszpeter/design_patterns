<?php

namespace Foo\Adapter;

use Foo\Adapter\Adapters\KindleAdapter;
use Foo\Adapter\ValueObjects\Book;
use Foo\Adapter\ValueObjects\Kindle;
use Foo\Adapter\ValueObjects\Person;

require_once __DIR__ . '/../../vendor/autoload.php';

$person = new Person();
$book   = new Book();

$person->read($book);
$person->read(new KindleAdapter(new Kindle()));
