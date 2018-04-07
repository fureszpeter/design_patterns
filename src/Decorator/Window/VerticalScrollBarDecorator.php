<?php

namespace Foo\Decorator\Window;

class VerticalScrollBarDecorator extends WindowDecorator
{
    /**
     * @inheritdoc
     */
    public function draw()
    {
        parent::draw();

        $this->drawVerticalScrollBar();
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return parent::getDescription() . ', including vertical scroll bar';
    }

    /**
     * @return void
     */
    private function drawVerticalScrollBar()
    {
        echo 'Draw the vertical scroll bar...';
    }
}
