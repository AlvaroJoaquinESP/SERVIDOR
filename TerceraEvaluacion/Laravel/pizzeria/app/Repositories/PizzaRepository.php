<?php

namespace App\Repositories;

use App\Models\Pizza;

class PizzaRepository
{
    public function calculateTotal($id)
    {

    }


    public function findPizza($id)
    {
        return Pizza::find($id);
    }
}




?>
