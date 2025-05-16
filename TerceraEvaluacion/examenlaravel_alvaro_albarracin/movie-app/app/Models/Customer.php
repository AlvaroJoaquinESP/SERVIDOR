<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'name',
        'email'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    public function rentalCustomer()
    {
        return $this->hasMany(Rental::class);
    }
}
