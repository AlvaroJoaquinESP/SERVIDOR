<?php

/* Este namespace establece que  que todas las clases, interfaces, funciones y constantes declaradas después de esta línea pertenecen al espacio de nombres "App\Repositories". */
namespace App\Repositories;
use App\Models\Order;

class OrderRepository
{
    public function all() 
    {
        return Order::all();
    }


    public function allWithTransport()
    {
        // Dentro del witch meto el método que he definido en Order.
        return Order::with('transport')->get();
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

        // Para que me muestre el objeto. Si lo pongo con return $order->save(), devuelve data (true o false).
        return $order;
    }
    
}

?>