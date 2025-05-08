<?php

// namespace App\Services;

// use App\Exceptions\ClientNotFoundException;
// use App\Models\Client;
// use App\Repositories\OrderRepository;
// use Illuminate\Http\Response;

// class OrderService {

//     protected $orderRepository;


//     public function __construct(OrderRepository $order_repository)
//     {
//         $this->orderRepository = $order_repository;
//     }


//     public function getAllByID($client_id)
//     {
//         $client = Client::find($client_id);

//         if (!$client) {

//             throw new ClientNotFoundException("The id '{$client_id}' does not exists.", Response::HTTP_NOT_FOUND);
        
//         }

//         return $this->orderRepository->getAllByID($client_id);
//     }


//     public function getByID($id)
//     {
//         return $this->orderRepository->getByID($id);
//     }
// }



?>