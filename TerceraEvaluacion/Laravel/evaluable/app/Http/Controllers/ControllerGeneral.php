<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Order;
use App\Services\Service;
use Illuminate\Http\Response;

class ControllerGeneral extends Controller
{
    protected $orderService;
    protected $clientService;


    public function __construct(Service $order_service, Service $client_service)
    {
        $this->orderService = $order_service;
        $this->clientService = $client_service;
    }


    public function getAllByID($client_id)
    {
        $orders = $this->orderService->getAllByID($client_id);
        return ApiResponse::success($orders, "Orders found");
    }


    public function getByID($id)
    {
        $order = $this->orderService->getByID($id);

        return ApiResponse::success($order, 'Found', Response::HTTP_OK);
    }


    public function create($client_id, $amount, $articles_id, $sale_data)
    {
        $order = new Order();

        $order->fill($client_id, $amount, $articles_id, $sale_data);
    }
}
