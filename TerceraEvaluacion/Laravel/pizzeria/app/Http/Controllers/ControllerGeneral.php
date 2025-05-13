<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\CreateOrderRequest;
use App\Services\Service;
use Illuminate\Http\Request;

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


    public function search($id)
    {
        $order = $this->service->search($id);
        return ApiResponse::success($order, "Found");
    }


    public function update(Request $request)
    {
        $params = $request->all();
 
        $order = $this->service->update($params);

        return ApiResponse::success($order, "Updated successfully");
    }


    public function calculateTotal($id)
    {
        $total = $this->service->calculateTotal($id);

        return ApiResponse::success($total, "Successfully");
    }
}
