<?php

namespace App\Repositories;
use App\Models\Order;

class OrderRepository
{
    public function all() 
    {
        return Order::all();
    }


    public function show($id)
    {
        return Order::findOrFail($id);
    }


    public function destroy($id)
    {
        return Order::findOrFail($id);
    }


    public function destroy2($id)
    {
        return Order::findOrFail($id);
    }


    public function create(Order $order)
    {
        return $order->save();
    }
    
}

?>