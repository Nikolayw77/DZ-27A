<?php

class StandardTaxi extends TaxiType
{
    public function getCarType() : ICarType
    {
        return new StandardCar();
    }
}