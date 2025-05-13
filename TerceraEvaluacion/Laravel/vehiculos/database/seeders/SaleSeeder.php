<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sale = new Sale();
        $sale->status = "PAID";
        $sale->amount = 5888.33;
        $sale->sale_date = "2025-05-13";
        $sale->seller_id = 1;
        $sale->client_id = 35;
        $sale->car_id = 2;
        $sale->save();

        $sale = new Sale();
        $sale->status = "CANCELLED";
        $sale->amount = 86778.67;
        $sale->sale_date = "2025-06-23";
        $sale->seller_id = 2;
        $sale->client_id = 999;
        $sale->car_id = 3;
        $sale->save();
        
        $sale = new Sale();
        $sale->status = "CREATED";
        $sale->amount = 9988.43;
        $sale->sale_date = "2027-05-03";
        $sale->seller_id = 3;
        $sale->client_id = 45;
        $sale->car_id = 1;
        $sale->save();
    }
}
