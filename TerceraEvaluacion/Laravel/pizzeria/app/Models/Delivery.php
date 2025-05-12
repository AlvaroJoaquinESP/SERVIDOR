<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'name',
        'phone'
    ];


    // DONDE 'EXPORTO' LA FK, TENGO ESTA FUNCIÓN.
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
