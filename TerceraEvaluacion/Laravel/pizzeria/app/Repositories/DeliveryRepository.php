<?php

namespace App\Repositories;

use App\Models\Delivery;

class DeliveryRepository
{
     public function searchDelivery($id)
    {
        return Delivery::find($id);
    }    
}

?>