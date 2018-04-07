<?php

namespace Foo\Adapter\Adapters;

use Foo\Adapter\Contracts\BookInterface;
use Foo\Adapter\ValueObjects\Kindle;

class KindleAdapter implements BookInterface
{
    /** @var Kindle */
    private $kindle;

    /**
     * @param Kindle $kindle
     */
    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        $this->kindle->turnOn();
    }

    public function turnPage()
    {
        $this->kindle->pushNextButton();
    }
}
