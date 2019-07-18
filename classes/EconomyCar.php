<?php

class EconomyCar implements ICarType
{
    public function getCarType() : string
    {
        return 'Daewoo Lanos';
    }
    public function getCarCost() : float
    {
        return 33.75;
    }
}
