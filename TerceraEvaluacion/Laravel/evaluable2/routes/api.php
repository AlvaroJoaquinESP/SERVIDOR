<?php

use App\Http\Controllers\ControllerGeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return 'Bienvenid@ al examen de recuperación de laravel ;)';
});


Route::get('/getAllById/{id}', [ControllerGeneral::class, 'getAllById']);

Route::get('/searchOrder/{id}', [ControllerGeneral::class, 'searchOrder']);

Route::get('/cancel/{id}', [ControllerGeneral::class, 'cancel']);

Route::post('/createOrder', [ControllerGeneral::class, 'createOrder']);

