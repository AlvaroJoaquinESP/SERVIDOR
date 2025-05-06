<?php

namespace App\Repositories;
use App\Models\Transport;

class TransportRepository {
    
    public function getAll()
    {
        return Transport::with('order')->get();
    }
}




?>