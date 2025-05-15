<?php

use App\Exceptions\ClientNotFoundException;
use App\Exceptions\PreconditionOrderFailed2;
use App\Helpers\ApiResponse;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        
		 $exceptions->render(function (ClientNotFoundException $exception){
            return ApiResponse::error($exception->getCode(),$exception->getMessage(), $exception->getCode());
        });

        $exceptions->render(function (PreconditionOrderFailed2 $exception){
            return ApiResponse::error($exception->getCode(),$exception->getMessage(), $exception->getCode());
        });
		
    })->create();
