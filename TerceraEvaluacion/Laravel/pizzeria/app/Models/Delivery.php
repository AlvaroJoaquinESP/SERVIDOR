<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'name',
        'phone'
    ];


    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    // DONDE 'EXPORTO' LA FK, TENGO ESTA FUNCIÓN.
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
