<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order1 = new Order();
        $order1->name = "Teclado";
        $order1->used = true;
        $order1->transport_id = 1;
        $order1->save();

        $order2 = new Order();
        $order2->name = "Ratón";
        $order2->used = false;
        $order2->transport_id = 2;
        $order2->save();

        $order3 = new Order();
        $order3->name = "Monitor";
        $order3->used = true;
        $order3->transport_id = 3;
        $order3->save();
    }
}
