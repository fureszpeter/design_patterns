<?php

namespace Foo\Adapter\ValueObjects;

class Kindle
{
    public function turnOn()
    {
        echo 'Push the power button on Kindle!' . PHP_EOL;
    }

    public function pushNextButton()
    {
        echo 'Push the next button on Kindle!' . PHP_EOL;
    }
}
