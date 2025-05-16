<?php

use App\Exceptions\MovieNotFound;
use App\Exceptions\PreconditionCustomerFailed;
use App\Exceptions\PreconditionMovieStockFailed;
use App\Exceptions\RentalNotFound;
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
        
		 $exceptions->render(function (MovieNotFound $exception){
            return ApiResponse::error('',$exception->getMessage(), $exception->getCode());
        });

        $exceptions->render(function (PreconditionCustomerFailed $exception){
            return ApiResponse::error($exception->getCode(), $exception->getMessage(), $exception->getCode());
        });
		
        $exceptions->render(function (PreconditionMovieStockFailed $exception){
            return ApiResponse::error($exception->getCode(), $exception->getMessage(), $exception->getCode());
        });

         $exceptions->render(function (RentalNotFound $exception){
            return ApiResponse::error($exception->getCode(), $exception->getMessage(), $exception->getCode());
        });
		
		
    })->create();
