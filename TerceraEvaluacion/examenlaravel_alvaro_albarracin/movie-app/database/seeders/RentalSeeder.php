<?php

namespace Database\Seeders;

use App\Models\Rental;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rental = new Rental();
        $rental->status = "INCIDENCE";
        $rental->rental_date = "2025-05-16";
        $rental->return_date = "2025-05-18";
        $rental->movie_id = 1;
        $rental->customer_id = 1;
        $rental->save();
        
        $rental = new Rental();
        $rental->status = "ACTIVE";
        $rental->rental_date = "2025-05-16";
        $rental->return_date = "2025-05-18";
        $rental->movie_id = 3;
        $rental->customer_id = 2;
        $rental->save();
        
        $rental = new Rental();
        $rental->status = "RETURNED";
        $rental->rental_date = "2025-05-16";
        $rental->return_date = "2025-05-18";
        $rental->movie_id = 2;
        $rental->customer_id = 3;
        $rental->save();
    }
}
