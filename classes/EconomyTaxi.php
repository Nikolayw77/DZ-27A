<?php

class EconomyTaxi extends TaxiType
{
    public function getCarType() : ICarType
    {
        return new EconomyCar();
    }
}