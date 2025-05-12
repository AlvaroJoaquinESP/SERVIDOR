<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $delivery = new Delivery();
        $delivery->name = "Giovani";
        $delivery->phone = "667888999";
        $delivery->save();
        
        $delivery = new Delivery();
        $delivery->name = "Lázaro";
        $delivery->phone = "677755999";
        $delivery->save();
        
        $delivery = new Delivery();
        $delivery->name = "Chipriani";
        $delivery->phone = "667811339";
        $delivery->save();
    }
}
