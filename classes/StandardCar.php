<?php

class StandardCar implements ICarType
{
    public function getCarType() : string
    {
        return 'Volkswagen Golf';
    }
    public function getCarCost() : float
    {
        return 55.50;
    }
}