<?php

namespace App\Services;

use App\Models\Order;
use App\Repositories\OrderRepository;

class OrderService {

    protected $orderRepository;


    public function __construct(OrderRepository $order_repository)
    {
        $this->orderRepository = $order_repository;
    }


    public function getAllByID($client_id)
    {
        return $this->orderRepository->getAllByID($client_id);
    }
}



?>