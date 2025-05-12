<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pizza = new Pizza();
        $pizza->name = "Margarita";
        $pizza->price = 7.95;
        $pizza->save();
        
        $pizza = new Pizza();
        $pizza->name = "4 Fromaggi";
        $pizza->price = 10.95;
        $pizza->save();

        $pizza = new Pizza();
        $pizza->name = "Napolitana";
        $pizza->price = 8.95;
        $pizza->save();
    }
}
