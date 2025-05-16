<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customer();
        $customer->name = "Cipriano";
        $customer->email = "cipri@alu.murciaeduca.es";
        $customer->save();
        
        $customer = new Customer();
        $customer->name = "Juan";
        $customer->email = "juan@alu.murciaeduca.es";
        $customer->save();
        
        $customer = new Customer();
        $customer->name = "Álvaro";
        $customer->email = "alvaro@alu.murciaeduca.es";
        $customer->save();
    }
}
