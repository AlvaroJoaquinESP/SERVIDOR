<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

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
}
