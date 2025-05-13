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


Route::post('/createOrder', [ControllerGeneral::class, 'create']);

Route::get('/calculateTotal/{id}', [ControllerGeneral::class, 'calculateTotal']);

Route::patch('/update', [ControllerGeneral::class, 'update']);

Route::get('/search/{id}' , [ControllerGeneral::class, 'search']);