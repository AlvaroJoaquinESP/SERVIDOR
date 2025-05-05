<?php

/**
 * Añado el controlador a la jerarquía con namespace.
 */

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\CreateWatchRequest;
use App\Services\WatchService;
use Illuminate\Http\Response;

class WatchController extends Controller
{
    protected $watchService;

    public function __construct(WatchService $watch_service)
    {
        $this->watchService = $watch_service;
    }


    public function getAll()
    {
        $watch = $this->watchService->getAll();
        return ApiResponse::success($watch, 'Orders received successfully', Response::HTTP_OK);
    }



    public function get($id)
    {
        
        return ApiResponse::success($this->watchService->get($id), "Found the watch with id {$id}");
        // if (!$watch) {
        //     throw new WatchNotFoundException('Not found the watch with id {$id}',404);
        // } else {
        //     return ApiResponse::success($watch, 'Found the watch with id {$id}');
        // }
    }


    public function delete($id)
    {
        $watch = $this->watchService->destroy($id);
        $watch->delete();
        return ApiResponse::success($watch, "Deleted succesfully watch with id {$id}");
    }


    public function create(CreateWatchRequest $create_watch_request)
    {
        // Recojo todos los datos de la request.
        $params = $create_watch_request->all();
        $watch = $this->watchService->create($params);

        return ApiResponse::success($watch, "Created successfully", Response::HTTP_CREATED);
    }
}
