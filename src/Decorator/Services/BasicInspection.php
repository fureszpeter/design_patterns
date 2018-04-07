<?php

namespace Foo\Decorator\Services;

use Foo\Decorator\Contracts\CarService;

class BasicInspection implements CarService
{
    /**
     * @return int
     */
    public function getCost()
    {
        return 25;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Basic inspection';
    }
}
