<?php

namespace Foo\Decorator\Services;

interface CarService
{
    /**
     * @return int
     */
    public function getCost();

    /**
     * @return string
     */
    public function getDescription();
}
