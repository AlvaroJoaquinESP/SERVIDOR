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


Route::get('/getAllSales', [ControllerGeneral::class, 'getAllSales']);

Route::post('/createSale', [ControllerGeneral::class, 'createSale']);

Route::patch('updateSale', [ControllerGeneral::class, 'updateSale']);