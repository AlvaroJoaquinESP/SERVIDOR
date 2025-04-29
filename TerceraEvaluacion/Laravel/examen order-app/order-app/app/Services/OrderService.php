<?php


namespace App\Services;

use App\Models\Order;
use App\Repositories\OrderRepository;

class OrderService 
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }


    public function all()
    {
        $order = $this->orderRepository->all();
        return $order;
    }


    public function show($id)
    {
        return $this->orderRepository->show($id);
    }


    public function destroy($id)
    {
        return $this->orderRepository->destroy($id);
    }
    

    public function destroy2($id)
    {
        return $this->orderRepository->destroy($id);
    }


    public function create($params)
    {
        $order4 = new Order();

        //Primera opción.
        // $order4->name =$params['name'];
        // $order4->used =$params['used'];

        //Segunda opción.
        $order4->fill($params);
    }
    
}
