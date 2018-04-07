<?php

namespace Foo\Decorator\Window;

abstract class WindowDecorator implements Window
{
    /** @var Window */
    private $window;

    /**
     * @param Window $window
     */
    public function __construct(Window $window)
    {
        $this->window = $window;
    }

    /**
     * @inheritdoc
     */
    public function draw()
    {
        $this->window->draw();
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return $this->window->getDescription();
    }
}
