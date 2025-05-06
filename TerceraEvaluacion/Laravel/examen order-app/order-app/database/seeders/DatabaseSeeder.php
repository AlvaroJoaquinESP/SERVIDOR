<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call([ExampleSeeder:class]) Para cargar seeders nuevos
       
        // Should be in order by fk.
        $this->call([TransportSeeder::class]);
        $this->call([OrderSeeder::class]);
    }
}
