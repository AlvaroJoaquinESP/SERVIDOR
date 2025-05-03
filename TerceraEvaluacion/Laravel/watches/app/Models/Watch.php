<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    protected $fillable = [
        'model',
        'brand',
        'type'
    ];


    // En el getAll ya me sale todo bien, debería de poner algo? ¿Cómo se pondría un enum?
    protected $cast = [

    ];
}
