<?php
namespace App\Repositories;

use App\Models\Order;

class OrderRepository 
{
    public function saveOrder(Order $order)
    {
        $order->save();

        return $order;
    }


    public function search($id)
    {
        return Order::find($id);
    }



}



?>