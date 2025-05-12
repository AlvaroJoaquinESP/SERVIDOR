<?php
namespace App\Repositories;

use App\Models\Order;

class OrderRepository 
{
    public function create(Order $order)
    {
        $order->save();

        return $order;
    }
}



?>