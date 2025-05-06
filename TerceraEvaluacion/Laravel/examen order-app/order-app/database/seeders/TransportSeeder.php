<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transport = new Transport();
        $transport->name = 'SEUR';
        $transport->owner = 'Ramón';
        $transport->save();

        $transport = new Transport();
        $transport->name = 'MRW';
        $transport->owner = 'Exploradora';
        $transport->save();

        $transport = new Transport();
        $transport->name = 'NACEX';
        $transport->owner = 'Cipri';
        $transport->save();
    }
}
