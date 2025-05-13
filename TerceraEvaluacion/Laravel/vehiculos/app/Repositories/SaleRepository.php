<?php

namespace App\Repositories;

use App\Models\Sale;

class SaleRepository
{
    public function getAllSales()
    {
        return Sale::with('car')->get();
        // return Sale::all();
    }


    public function saveSale(Sale $sale)
    {
        $sale->save();
        
        return $sale;
    }


    public function getCarId($id)
    {
        return Sale::where('car_id', $id)->first();
    }
}



?>