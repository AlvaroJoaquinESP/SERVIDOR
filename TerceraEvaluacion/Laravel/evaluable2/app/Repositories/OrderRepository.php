<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository
{
    public function getAllById($client_id)
    {
        return Order::where('client_id', $client_id)->get();
    }

    public function saveOrder(Order $order)
    {
        $order->save();

        return $order;
    }


    public function searchOrder($id)
    {
         return Order::with('client')->find($id);
    }

}




?>