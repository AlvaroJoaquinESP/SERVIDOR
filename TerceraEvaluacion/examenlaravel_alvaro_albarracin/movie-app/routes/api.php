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


Route::get('/movies/available', [ControllerGeneral::class, 'getAllMovies']);

Route::get('/movies/{id}', [ControllerGeneral::class, 'searchMovie']);

Route::post('/rentals', [ControllerGeneral::class, 'createRental']);

Route::post('/rentals/{id}/return', [ControllerGeneral::class, 'returnFilm']);