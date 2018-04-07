<?php

namespace Foo\Decorator\Services;

class OilChange implements CarService
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
        return $this->carService->getCost() + 29;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return sprintf(
            '%s and Oil Change!',
            $this->carService->getDescription()
        );
    }
}
