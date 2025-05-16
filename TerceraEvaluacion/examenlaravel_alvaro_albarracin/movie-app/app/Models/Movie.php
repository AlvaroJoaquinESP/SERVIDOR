<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = [
        'id',
        'title',
        'release_year',
        'stock'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    public function rentalMovie()
    {
        return $this->hasMany(Rental::class);
    }
}
