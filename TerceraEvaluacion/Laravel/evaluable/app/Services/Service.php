<?php

namespace App\Services;

use App\Exceptions\ClientNotFoundException;
use App\Models\Client;
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


    public function getAllByID($client_id)
    {
        $client = Client::find($client_id);

        if (!$client) {

            throw new ClientNotFoundException("The id '{$client_id}' does not exists", Response::HTTP_NOT_FOUND);
        }

        return $this->orderRepository->getAllByID($client_id);
    }


    public function getByID($id)
    {
        $client = Client::find($id);

        if (!$client) {
            throw new ClientNotFoundException("The client with id '{$id}' does not exists", Response::HTTP_NOT_FOUND);
        }

        return $this->orderRepository->getByID($id);
    }


    public function create(Order $order)
    {
        
    }
}
