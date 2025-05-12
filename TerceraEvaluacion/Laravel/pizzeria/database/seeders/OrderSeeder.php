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
        $order = new Order();
        $order->status = "PAID";
        $order->order_date = "2025-05-13";
        $order->pizza_ids = "1,2,3";
        $order->delivery_id = 1;
        $order->save();

        
        $order = new Order();
        $order->status = "CREATED";
        $order->order_date = "2025-05-13";
        $order->pizza_ids = "4,5";
        $order->delivery_id = 2;
        $order->save();

        
        $order = new Order();
        $order->status = "PAID";
        $order->order_date = "2025-05-13";
        $order->pizza_ids = "6,7,8,9";
        $order->delivery_id = 3;
        $order->save();
    }
}
