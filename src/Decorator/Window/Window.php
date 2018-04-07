<?php

namespace Foo\Decorator\Window;

interface Window
{
    /**
     * @return void
     */
    public function draw();

    /**
     * @return string
     */
    public function getDescription();
}
