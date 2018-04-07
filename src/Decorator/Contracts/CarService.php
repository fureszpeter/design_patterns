<?php

namespace Foo\Decorator\Contracts;

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
