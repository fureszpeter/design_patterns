<?php

namespace Foo\Decorator\Window;

class SimpleWindow implements Window
{
    /**
     * @return void
     */
    public function draw()
    {
        echo 'Draw simple window... ';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Simple window';
    }
}
