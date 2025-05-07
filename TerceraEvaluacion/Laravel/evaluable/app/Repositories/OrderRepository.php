<?php

namespace App\Repositories;

use App\Models\Client;

class OrderRepository {
    
    public function getAllByID($client_id)
    {
        return Client::where('client_id')->get();
    }
}


?>