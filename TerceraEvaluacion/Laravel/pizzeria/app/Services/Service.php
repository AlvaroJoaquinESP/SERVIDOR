<?php

namespace App\Services;

use App\Enums\OrderStatusEnum;
use App\Exceptions\OrderNotFoundException;
use App\Models\Order;
use App\Repositories\OrderRepository;
use Illuminate\Http\Response;

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

        return $this->orderRepository->saveOrder($order);
    }


    public function search($id)
    {
        $order = Order::find($id); 

        if (!$order) {
            throw new OrderNotFoundException("Order not found", Response::HTTP_NOT_FOUND);
        }
        return $this->orderRepository->search($id);
    }


    public function calculateTotal($pizza_ids)
    {
        $array = explode(",", $pizza_ids);

    }


    public function update($params, $new_status)
    {
        $id = $params['id'];

        $order = Order::find($id);

        $order->status = $new_status;
    }
}







?>