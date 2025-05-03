<?php

use App\Http\Controllers\WatchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return 'Bienvenid@ al examen de recuperación de laravel ;)';
});


Route::get('/getAll', [WatchController::class, 'getAll']);

Route::get('/get/{id}', [WatchController::class, 'get']);

Route::get('/delete/{id}', [WatchController::class, 'delete']);

Route::post('/create', [WatchController::class, 'create']);