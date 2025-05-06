<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return 'Bienvenid@ al examen de recuperación de laravel ;)';
});

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
