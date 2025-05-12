<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\CreateOrderRequest;
use Service;

class ControllerGeneral extends Controller
{

    protected $service;

    public function __construct(Service $serviceP)
    {
        $this->service = $serviceP;
    }

    public function create(CreateOrderRequest $create_order_request)
    {
        // Recojo los parámetros.
        $params = $create_order_request->all();

        // Los paso al servicio para que haga la magia.
        $order = $this->service->create($params);
        return ApiResponse::success($order, "Created");
    }
}
