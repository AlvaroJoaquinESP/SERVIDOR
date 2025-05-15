<?php

namespace App\Models;

use App\Enums\SaleStatus;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'amount',
        'sale_date',
        'seller_id',
        'client_id',
        'car_id',
        
        // Para actualizar.
        'status',
        'saleId'
    ];

    protected $casts = [
        'status' => SaleStatus::class
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
