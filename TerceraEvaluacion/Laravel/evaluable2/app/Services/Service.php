<?php

namespace App\Services;

use App\Exceptions\ClientNotFoundException;
use App\Repositories\ClientRepository;
use App\Repositories\OrderRepository;

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
            throw new ClientNotFoundException("Client with id {$client_id} does not exists");
        }
    }
}




?>