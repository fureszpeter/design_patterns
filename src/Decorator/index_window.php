<?php

namespace Foo\Decorator;

use Foo\Decorator\Services\BasicInspection;
use Foo\Decorator\Services\OilChange;
use Foo\Decorator\Services\TireRotation;
use Foo\Decorator\Window\HorizontalScrollBarDecorator;
use Foo\Decorator\Window\SimpleWindow;
use Foo\Decorator\Window\VerticalScrollBarDecorator;

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Example #1 - CarService
 *
 * @link https://laracasts.com/series/design-patterns-in-php/episodes/1
 */
$basicInspection = new BasicInspection();
echo $basicInspection->getDescription() . PHP_EOL;
echo $basicInspection->getCost() . PHP_EOL;

$tireRotation = new TireRotation($basicInspection);
echo $tireRotation->getDescription() . PHP_EOL;
echo $tireRotation->getCost() . PHP_EOL;

$oilChangeAndTireRotation = new OilChange($tireRotation);
echo $oilChangeAndTireRotation->getDescription() . PHP_EOL;
echo $oilChangeAndTireRotation->getCost() . PHP_EOL;

/**
 * Example #2 - Window
 *
 * @link https://en.wikipedia.org/wiki/Decorator_pattern#Java
 */

echo '---------- Executing example #2 ------------' . PHP_EOL;

$simpleWindow = new SimpleWindow();
echo $simpleWindow->getDescription() . PHP_EOL;
$simpleWindow->draw();

echo PHP_EOL . '***horizontal window***' . PHP_EOL;
$horizontalWindow = new HorizontalScrollBarDecorator($simpleWindow);
echo $horizontalWindow->getDescription() . PHP_EOL;
$horizontalWindow->draw();

echo PHP_EOL . '***vertical window***' . PHP_EOL;
$verticalWindow = new VerticalScrollBarDecorator($simpleWindow);
echo $verticalWindow->getDescription() . PHP_EOL;
$verticalWindow->draw();

echo PHP_EOL . '***vertical and horizontal window***' . PHP_EOL;
$verticalAndHorizontalWindow = new VerticalScrollBarDecorator($horizontalWindow);
echo $verticalAndHorizontalWindow->getDescription() . PHP_EOL;
$verticalAndHorizontalWindow->draw();
