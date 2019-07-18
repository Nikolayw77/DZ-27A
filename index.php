<?php

spl_autoload_register(
    function($class)
    {
        $path = __DIR__ . "/classes/$class.php";
        if (file_exists($path)) {
            require_once $path;
        }
    }
);

function callTaxi(TaxiType $taxiType)
{
    $taxiType->callCar();
}

callTaxi(new EconomyTaxi());
callTaxi(new StandardTaxi());
callTaxi(new LuxTaxi());