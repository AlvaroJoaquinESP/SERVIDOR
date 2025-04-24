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


Route::get('/show/{id}', [OrderController::class, 'show']);


