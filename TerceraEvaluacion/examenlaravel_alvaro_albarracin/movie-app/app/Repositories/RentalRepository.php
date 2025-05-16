<?php

namespace App\Repositories;

use App\Models\Rental;

class RentalRepository
{

    public function saveRental(Rental $rental)
    {
        $rental->save();

        return $rental;
    }


    public function findStatusCustomer($id, $status)
    {
        return Rental::where('status', $status)->find($id);
    }


    public function findRental($id)
    {
        return Rental::find($id);
    }
}


?>