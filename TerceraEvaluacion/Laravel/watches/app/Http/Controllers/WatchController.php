<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use WatchService;

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
        return ApiResponse::success($watch, 'Orders received successfully');
    }
}
