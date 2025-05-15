<?php

namespace App\Repositories;

use App\Models\Car;

class CarRepository
{
    public function saveCar(Car $car)
    {
        $car->save();

        return $car;
    }
}



?>