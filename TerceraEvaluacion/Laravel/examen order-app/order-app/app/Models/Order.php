<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'used',
    ];

    // Para decirle que no ponga s en las tablas.
    // SOLUCIÓN: PONER LAS TABLAS CON S.
    protected $table = 'order';

    // Para que salga true o false en vez de 0, 1.
    protected $casts = [
        'used' => 'boolean',
    ];
    
    // Donde está definida la fk, tenemos que poner esta funcion.
    function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
