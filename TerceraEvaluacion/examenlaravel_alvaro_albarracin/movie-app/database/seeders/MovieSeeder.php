<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = new Movie();
        $movie->title = "El Resplandor";
        $movie->release_year = 2012;
        $movie->stock = 3;
        $movie->save();


        $movie = new Movie();
        $movie->title = "El Show de Truman";
        $movie->release_year = 1996;
        $movie->stock = 6;
        $movie->save();

        $movie = new Movie();
        $movie->title = "El Renacido";
        $movie->release_year = 2018;
        $movie->stock = 0;
        $movie->save();
    }
}
