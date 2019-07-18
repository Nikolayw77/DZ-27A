<?php

class LuxTaxi extends TaxiType
{
    public function getCarType() : ICarType
    {
        return new LuxCar();
    }
}