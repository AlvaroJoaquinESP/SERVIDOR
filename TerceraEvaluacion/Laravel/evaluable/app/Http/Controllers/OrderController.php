<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Services\OrderService;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    protected $orderService;


    public function __construct(OrderService $order_service)
    {
        $this->orderService = $order_service;
    }


    public function getAllByID($client_id)
    {
        $orders = $this->orderService->getAllByID($client_id);
        return ApiResponse::success($orders,"Orders found");
    }


    public function getByID($id)
    {
        $order = $this->orderService->getByID($id);

        return ApiResponse::success($order, 'Found', Response::HTTP_OK);
    }

    
}
