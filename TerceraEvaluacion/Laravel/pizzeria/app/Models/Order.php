<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_date',
        'pizza_ids',
        'delivery_id',

        // Estos dos para actualizar.
        'new_status',
        'order_id'
    ];

    protected $casts = [
        'status' => OrderStatusEnum::class
    ];


    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // DONDE ESTÁ LA FK, TENGO ESTA FUNCIÓN.
    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
    
}
