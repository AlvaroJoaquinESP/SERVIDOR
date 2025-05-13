<?php

namespace App\Services;

use App\Enums\OrderStatusEnum;
use App\Exceptions\OrderNotFoundException;
use App\Exceptions\PreconditionOrderFailed;
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

        $order->fill($params);
        /**
         * Despues el status, para que por si por error, al crear le paso un status, que por defecto es CREATED, como indica el ENUNCIADO. 
         * Lo he puesto en $fillable ya que es más fácil para hacer el update.
         */
        $order->status = OrderStatusEnum::CREATED;

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


    public function update($params)
    {
        $id = $params['order_id'];
        $status = $params['new_status'];

        $order = Order::find($id);

        if (!$order) {
            throw new OrderNotFoundException("Order not found", Response::HTTP_NOT_FOUND);
        }

        if ($order->status == OrderStatusEnum::IN_PREPARATION || $order->status == OrderStatusEnum::DELIVERED) {
            throw new PreconditionOrderFailed("Order is in preparation or is already delivered", Response::HTTP_PRECONDITION_FAILED);
        }

        /**
         * No hago fill para conservar los campos que me pide el ejercicio.
         */
        $order->id = $id;
        $order->status = $status;

        return $this->orderRepository->saveOrder($order);
    }
    
}







?>