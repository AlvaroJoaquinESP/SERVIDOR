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
        return Order::find($id);
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
        $order->save();

        // Para que me muestre el objeto. si lo pongo con return $order->save(), devuelve data (true o false).
        return $order;
    }
    
}

?>