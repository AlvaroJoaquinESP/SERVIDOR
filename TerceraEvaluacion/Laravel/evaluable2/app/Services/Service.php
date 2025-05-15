<?php

namespace App\Services;

use App\Enums\OrderStatusEnum2;
use App\Exceptions\ClientNotFoundException;
use App\Exceptions\PreconditionOrderFailed2;
use App\Models\Order;
use App\Repositories\ClientRepository;
use App\Repositories\OrderRepository;
use Illuminate\Http\Response;

class Service
{
    protected $orderRepository;
    protected $clientRepository;

    public function __construct(OrderRepository $order_repository, ClientRepository $client_repository)
    {
        $this->orderRepository = $order_repository;
        $this->clientRepository = $client_repository;
    }


    public function getAllById($client_id)
    {
        $client = $this->clientRepository->findClient($client_id);

        if (!$client) {
            throw new ClientNotFoundException("Client with id {$client_id} does not exists", Response::HTTP_NOT_FOUND);
        }

        return $this->orderRepository->getAllById($client_id);
    }


    public function createOrder($params)
    {
        $client_id = $params['client_id'];
        $order = new Order();
        $client = $this->clientRepository->findClient($client_id);

        if (!$client) {
            throw new ClientNotFoundException("Does not exists a client with id {$client_id}", Response::HTTP_NOT_FOUND);
        }

        $order->fill($params);
        $order->status = OrderStatusEnum2::CREATED;

        return $this->orderRepository->saveOrder($order);
    }


    public function searchOrder($id)
    {
        $client = $this->orderRepository->searchOrder($id);

        if (!$client) {
            throw new ClientNotFoundException("Client not found", Response::HTTP_NOT_FOUND);
        }

        return $client;
    }


    public function cancel($id)
    {
        $order = $this->orderRepository->searchOrder($id);

        if (!$order) {
            throw new ClientNotFoundException("Client not found", Response::HTTP_NOT_FOUND);
        }

        dd($order->status);
        if ($order->status == OrderStatusEnum2::PROCESSED || $order->status == OrderStatusEnum2::CANCELLED) {
            throw new PreconditionOrderFailed2("The status is processed or cancelled", Response::HTTP_PRECONDITION_FAILED);
        }

        
            $order->status = OrderStatusEnum2::CANCELLED;
        return $order;
    }
}
