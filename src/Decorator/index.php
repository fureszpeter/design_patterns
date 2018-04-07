<?php

namespace Foo\Decorator;

use Foo\Decorator\Services\BasicInspection;
use Foo\Decorator\Services\OilChange;
use Foo\Decorator\Services\TireRotation;

require_once __DIR__ . '/../../vendor/autoload.php';

$basicInspection = new BasicInspection();
echo $basicInspection->getDescription() . PHP_EOL;
echo $basicInspection->getCost() . PHP_EOL;

$tireRotation = new TireRotation($basicInspection);
echo $tireRotation->getDescription() . PHP_EOL;
echo $tireRotation->getCost() . PHP_EOL;

$oilChangeAndTireRotation = new OilChange($tireRotation);
echo $oilChangeAndTireRotation->getDescription() . PHP_EOL;
echo $oilChangeAndTireRotation->getCost() . PHP_EOL;
