<?php

use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\JwtMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Bienvenid@ al examen de recuperación de laravel ;)';
});

// -- COMENTADO PARA USAR JWT --
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');




Route::post('register', [JWTAuthController::class, 'register']);
Route::get('login', [JWTAuthController::class, 'login']);




/**
 * -- METO DENTRO DE ESTE MÉTODO AQUELLOS ENDPOINTS QUE NECESITEN           DE        JWTAUTH. --
 */
Route::middleware([JwtMiddleware::class])->group(function () {
    Route::get('user', [JWTAuthController::class, 'getUser']);
    Route::post('logout', [JWTAuthController::class, 'logout']);
    // Ejecuta el método index de la clase OrderController.
    Route::get('/orders', [OrderController::class, 'index']);

    // Tipo post. ¡¡Todo aquello que modifique la bbdd es de tipo post!!
    Route::post('/create', [OrderController::class, 'create']);

    // Parámetros.
    Route::get('/show/{id}', [OrderController::class, 'show']);


    Route::get('/destroy/{id}', [OrderController::class, 'destroy']);


    Route::get('/destroy2/{id}', [OrderController::class, 'destroy2']);


    Route::get('/indexComplete', [OrderController::class, 'indexComplete']);


    Route::get('/getAllTransports', [OrderController::class, 'getAll']);
});
