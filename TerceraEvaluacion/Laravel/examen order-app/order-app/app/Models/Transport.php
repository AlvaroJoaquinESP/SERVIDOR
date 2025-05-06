<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = [
        'name',
        'owner'
    ];

    // Estos valores no los va a mostrar.
    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    // En la que 'cede' la fk, ponemos esta función.
    function order() 
    {
        return $this->hasMany(Order::class);
    }
}
