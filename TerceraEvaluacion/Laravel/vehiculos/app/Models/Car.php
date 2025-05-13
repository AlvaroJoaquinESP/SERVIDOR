<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'license',
        'model',
        'brand',
        'used'
    ];

    protected $casts = [
        'used' => 'boolean'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    public function sale()
    {
        return $this->hasOne(Sale::class);
    }
}
