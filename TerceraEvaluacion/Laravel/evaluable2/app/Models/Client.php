<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     protected $fillable = [
        'name',
        'phone',
        'prime'
    ];

    protected $casts = [
        'prime' => "boolean"
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
