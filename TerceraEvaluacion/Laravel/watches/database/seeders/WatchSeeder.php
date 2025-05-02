<?php

namespace Database\Seeders;

use App\Models\Watch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $watch1 = new Watch();
        $watch1->model = "Diver";
        $watch1->brand = "ROLEX";
        $watch1->type = "BUSINESS";
        $watch1->save();

        $watch2 = new Watch();
        $watch2->model = "B&L";
        $watch2->brand = "LOTUS";
        $watch2->type = "CASUAL";
        $watch2->save();

        $watch3 = new Watch();
        $watch3->model = "Active";
        $watch3->brand = "TAGHEUR";
        $watch3->type = "SPORT";
        $watch3->save();
    }
}
