<?php

namespace App\Repositories;

use App\Models\Client;
use App\Models\Order;

class OrderRepository {
    
    public function getAllByID($client_id)
    {
        return Order::where('client_id', $client_id)->get();
    }


    public function createOrder($client_id, $sale_data, $articles_id, $amount)
    {

    }


    public function getByID($id)
    {
        return Order::find($id);
    }
}


?>