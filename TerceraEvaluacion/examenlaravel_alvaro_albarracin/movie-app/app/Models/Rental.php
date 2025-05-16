<?php

namespace App\Models;

use App\Enums\RentalStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    
    protected $fillable = [
        'rental_date',
        'return_date',
        'movie_id',
        'customer_id'
    ];

    protected $casts = [
        'status' => RentalStatusEnum::class
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    public function customer()
    {
        return $this->belongsTo(Rental::class);
    }


    public function movie()
    {
        return $this->belongsTo(Rental::class);
    }
}
