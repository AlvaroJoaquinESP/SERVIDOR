<?php

namespace App\Services;

use App\Enums\OrderStatus;
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


    public function create($params)
    {
        /**
         * Creo un obj con los parámetros que recibo del array $params.
         */
        $order = new Order();

        /**
         * Asigno valores al obj.
         * ¿Funcionaría con fill? Ya que el status debe de ser created por defecto.
         */
        $order->sale_date = $params['sale_date'];
        $order->amount = $params['amount'];
        $order->client_id = $params['client_id'];
        $order->articles_id = $params['articles_id'];
        $order->status = OrderStatus::CREATED;

        /**
         * Paso el obj que he creado al repository.
         */
        return $this->orderRepository->create($order);
    }
}
