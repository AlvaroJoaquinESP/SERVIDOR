<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'status',
        'sale_date',
        'amount',
        'client_id'
    ];


    // Donde está la fk, tengo esta función.
    public function clients()
    {
        return $this->belongsTo(Client::class);
    }

}
