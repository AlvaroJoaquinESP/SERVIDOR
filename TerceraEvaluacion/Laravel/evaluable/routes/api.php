<?php

use App\Http\Controllers\ControllerGeneral;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return 'Bienvenid@ al examen de recuperación de laravel ;)';
});


Route::get('/getAllByID/{id}', [ControllerGeneral::class, 'getAllByID']);


Route::get('/getByID/{id}', [ControllerGeneral::class, 'getByID']);


Route::post('/createOrder', [ControllerGeneral::class, 'create']);