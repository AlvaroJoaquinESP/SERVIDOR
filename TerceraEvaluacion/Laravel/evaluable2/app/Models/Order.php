<?php

namespace App\Models;

use App\Enums\OrderStatusEnum2;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'status',
        'sale_date',
        'articles_id',
        'amount',
        'client_id'
    ];

    protected $casts = [
        'status' => OrderStatusEnum2::class,
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
