<?php

abstract class TaxiType
{
    abstract public function getCarType() : ICarType;
    public function callCar()
    {
        $carType = $this->getCarType();


        var_dump ('Car -> ' . $carType->getCarType());
        echo "<br/>";
        var_dump ('Price -> ' . $carType->getCarCost());
        echo "<br/>";
    }
}

