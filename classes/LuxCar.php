<?php

class LuxCar implements ICarType
{
    public function getCarType() : string
    {
        return 'Porsh Cayen';
    }
    public function getCarCost() : float
    {
        return 109.90;
    }
}
