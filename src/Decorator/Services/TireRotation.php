<?php

namespace Foo\Decorator\Services;

class TireRotation implements CarService
{
    /** @var CarService */
    private $carService;

    /**
     * @param CarService $carService
     */
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->carService->getCost() + 15;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return sprintf(
            '%s and Tire rotation!',
            $this->carService->getDescription()
        );
    }
}
