<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\CreateOrderRequest;
use App\Models\Order;
use App\Services\OrderService;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        // Un getAll();
        $orders = $this->orderService->all();
        
        // No es obligatorio el 200.
        return ApiResponse::success($orders,"Orders retrieved successfully", 200);
        
        // Me ahorro todo este tocho con el success de arriba. Que sale de mi Helper APIRESPONSE.
        
        // return response()->json([
        //     'status' => true,
        //     'message' => 'Orders retrieved successfully',
        //     'data' => $orders
        // ], 200);
    }


    public function show($id)
    {
        $order = $this->orderService->show($id);
        return response()->json([
            'status' => true,
            'message' => 'Order find successfully',
            'data' => $order
        ], 200);
    }


    // Con el codigo 204(No content) No devuelve ningún mensaje. De hecho, no se debe de poner cuerpo de respuesta.

    public function destroy($id)
    {
        $order = $this->orderService->destroy($id);
        $order->delete();

        return response()->json([
            'status' => true,
            'message' => 'Order deleted successfully'
        ], 200);
    }


    public function destroy2($id)
    {
        $order = $this->orderService->destroy2($id);
        $order->delete();

        return response()->noContent();
        /**
         * El método noContent() INCLUYE EL CÓDIGO 204, por lo que no hace falta ponerlo.
         */
    }



    // Lo que recibe me permite decirle que necesito que me mande lo que he definido en rules. Y además, me va a servir para sacar los datos que me han venido de esos valores definidos, si están definidos. Vienen en un array asociativo.
    public function create(CreateOrderRequest $createOrderRequest)
    {
        $params = $createOrderRequest->all();
        $this->orderService->create($params); 
        
    }
}
