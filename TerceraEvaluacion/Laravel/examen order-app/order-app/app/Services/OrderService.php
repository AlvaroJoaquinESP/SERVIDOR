<?php


namespace App\Services;

use App\Exceptions\OrderNotFoundException;
use App\Models\Order;
use App\Repositories\OrderRepository;
use App\Repositories\TransportRepository;
use Illuminate\Http\Response;

class OrderService 
{
    protected $orderRepository;
    protected $transportRepository;

    public function __construct(OrderRepository $orderRepository, TransportRepository $transport_repository)
    {
        $this->orderRepository = $orderRepository;
        $this->transportRepository = $transport_repository;
    }


    public function all()
    {
        $order = $this->orderRepository->all();
        return $order;
    }



    public function allWithTransport()
    {
        return $this->orderRepository->allWithTransport();
    }


    public function show($id)
    {
        $order =  $this->orderRepository->show($id);
        if(!$order){
            throw new OrderNotFoundException("No existe order con id{$id}",Response::HTTP_NOT_FOUND);
        }
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
        $order = new Order();

        //Primera opción.
        // $order4->name =$params['name'];
        // $order4->used =$params['used'];

        //Segunda opción. Gracias al protected $fillable del Modelo. Le indico los campos que debe mapear gracias a lo del modelo.
        $order->fill($params);
        return $this->orderRepository->create($order);
    }


    /**
     * Transport functions.
     */
    
    public function getAll()
    {
        return $this->transportRepository->getAll();
    }
}
