<?php

use App\Enums\OrderStatusEnum;
use App\Models\Order;
use App\Repositories\OrderRepository;

class Service 
{
    protected $orderRepository;

    public function __construct(OrderRepository $order_repository)
    {
        $this->orderRepository = $order_repository;
    }


    public function create($params)
    {
        $order = new Order();

        $order->status = OrderStatusEnum::CREATED;
        $order->fill($params);

        return $this->orderRepository->create($order);
    }
}







?>