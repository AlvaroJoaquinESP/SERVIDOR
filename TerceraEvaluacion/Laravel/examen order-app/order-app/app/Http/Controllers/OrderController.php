<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class OrderController extends Controller
{
    public function index()
    {
        // Un getAll();
        $orders = Order::all();
        return response()->json([
            'status' => true,
            'message' => 'Orders retrieved successfully',
            'data' => $orders
        ], 200);
    }


    public function show($id)
    {
        $order = Order::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Order find successfully',
            'data' => $order
        ], 200);
    }


    // Con el codigo 204(No content) No devuelve ningún mensaje. De hecho, no se debe de poner cuerpo de respuesta.

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json([
            'status' => true,
            'message' => 'Order deleted successfully'
        ], 200);
    }


    public function destroy2($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->noContent();
        /**
         * El método noContent() INCLUYE EL CÓDIGO 204, por lo que no hace falta ponerlo.
         */
    }
}
