<?php

namespace App\Services;

use App\Enums\SaleStatus;
use App\Exceptions\PreconditionSaleException;
use App\Models\Sale;
use App\Repositories\CarRepository;
use App\Repositories\SaleRepository;
use Illuminate\Http\Response;

class Service
{
    protected $carRepository;
    protected $saleRepository;

    public function __construct(CarRepository $car_repository, SaleRepository $sale_repository)
    {
        $this->carRepository = $car_repository;
        $this->saleRepository = $sale_repository;
    }


    public function getAllSales()
    {
        return $this->saleRepository->getAllSales();
    }


    public function createSale($params)
    {
        $car_id = $params['car_id'];

        $sale = new Sale();
        
        $car = $this->saleRepository->getCarId($car_id);

        if (!$car) {
            throw new PreconditionSaleException("The id {$car_id} already exists", Response::HTTP_PRECONDITION_FAILED);
        }

        $sale->fill($params);
        $sale->status = SaleStatus::CREATED;

        return $this->saleRepository->saveSale($sale);

    }


}
