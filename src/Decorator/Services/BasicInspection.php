<?php

namespace Foo\Decorator\Services;

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
