<?php

namespace Foo\Decorator\Window;

class HorizontalScrollBarDecorator extends WindowDecorator
{
    /**
     * @inheritdoc
     */
    public function draw()
    {
        parent::draw();

        $this->drawHorizontalScrollBar();
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return parent::getDescription() . ', including horizontal scroll bar';
    }

    /**
     * @return void
     */
    private function drawHorizontalScrollBar()
    {
        echo 'Drawing the horizontal scroll bar...';
    }
}
