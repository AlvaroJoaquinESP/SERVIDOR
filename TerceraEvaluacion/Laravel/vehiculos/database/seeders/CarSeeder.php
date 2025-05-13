<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car = new Car();
        $car->license = "1111GYD";
        $car->model = "Punto";
        $car->brand = "Fiat";
        $car->used = true;
        $car->save();
        
        $car = new Car();
        $car->license = "1112FHD";
        $car->model = "Quasqai";
        $car->brand = "Nissan";
        $car->used = false;
        $car->save();
        
        $car = new Car();
        $car->license = "1333FNM";
        $car->model = "Astra";
        $car->brand = "Opel";
        $car->used = true;
        $car->save();
    }
}
