<?php

namespace App\Repositories;

use App\Models\Delivery;

class DeliveryRepository
{
     public function findDelivery($id)
    {
        return Delivery::find($id);
    }    
}

?>