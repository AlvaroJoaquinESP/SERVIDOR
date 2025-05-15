<?php

namespace App\Repositories;

use App\Models\Client;

class ClientRepository
{
    public function findClient($client_id)
    {
        return Client::find($client_id);
    }
}




?>