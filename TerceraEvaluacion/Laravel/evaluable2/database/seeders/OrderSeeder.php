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
        $order->status = "CREATED";
        $order->sale_date = "2025-05-15";
        $order->articles_id = "34";
        $order->amount = 344.57;
        $order->client_id = 1;
        $order->save();

        $order = new Order();
        $order->status = "PROCESSED";
        $order->sale_date = "2025-05-14";
        $order->articles_id = "344";
        $order->amount = 355.57;
        $order->client_id = 2;
        $order->save();

        $order = new Order();
        $order->status = "PAID";
        $order->sale_date = "2025-05-13";
        $order->articles_id = "357";
        $order->amount = 672.58;
        $order->client_id = 3;
        $order->save();
    }
}
