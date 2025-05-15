<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\CreateOrderRequest2;
use App\Services\Service;
use Illuminate\Http\Response;

class ControllerGeneral
{
    protected $service;

    public function __construct(Service $_service)
    {
        $this->service = $_service;
    }


    public function getAllById($client_id)
    {
        $orders = $this->service->getAllById($client_id);
        return ApiResponse::success($orders, "Array of orders by client");
    }


    public function createOrder(CreateOrderRequest2 $create_order_request2)
    {
        $params = $create_order_request2->all();

        $order = $this->service->createOrder($params);
        return ApiResponse::success($order, "Created successfully", Response::HTTP_CREATED);
    }


    public function searchOrder($id)
    {
        $order = $this->service->searchOrder($id);
         return ApiResponse::success($order, "Order found");
    }


    public function cancel($id)
    {
        $order = $this->service->cancel($id);
        return ApiResponse::success($order, "Order with id {$id} cancelled");
    }
}
