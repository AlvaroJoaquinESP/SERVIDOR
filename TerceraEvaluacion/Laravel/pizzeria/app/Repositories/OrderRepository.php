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


    public function searchOrder($id)
    {
        // Método definido en la clase Order.
        return Order::with('delivery')->find($id);
    }


    public function findOrder($id)
    {
        return Order::find($id);
    }



}



?>