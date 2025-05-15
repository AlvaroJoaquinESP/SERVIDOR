<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Client();
        $client->name = "Cipriano";
        $client->phone = "690897612";
        $client->prime = true;
        $client->save();
        
        $client = new Client();
        $client->name = "Juan";
        $client->phone = "77799034";
        $client->prime = False;
        $client->save();
        
        $client = new Client();
        $client->name = "Yasmine";
        $client->phone = "78901122";
        $client->prime = true;
        $client->save();
    }
}
