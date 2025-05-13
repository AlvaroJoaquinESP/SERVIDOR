<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\CreateSaleRequest;
use App\Services\Service;
use Illuminate\Http\Response;

class ControllerGeneral extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }


    public function getAllSales()
    {
        $sale = $this->service->getAllSales();
        return ApiResponse::success($sale,"Received successfully");
    }


    public function createSale(CreateSaleRequest $create_sale_request)
    {
        $params = $create_sale_request->all();

        $sale = $this->service->createSale($params);

        return ApiResponse::success($sale, "Created", Response::HTTP_CREATED);
    }
}
