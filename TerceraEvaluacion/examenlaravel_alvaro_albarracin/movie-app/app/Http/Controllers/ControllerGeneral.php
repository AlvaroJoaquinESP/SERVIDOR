<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\CreateRentalRequest;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ControllerGeneral
{
    protected $service;

    public function __construct(Service $_service)
    {
        $this->service = $_service;        
    }


     public function getAllMovies()
    {
        $movies = $this->service->getAllMovies();
        return ApiResponse::success($movies, "Array of movies successfull");
    }


    public function searchMovie($id)
    {
        $movie = $this->service->searchMovie($id);
        return ApiResponse::success($movie, "The movie with id {$id} was found");
    }


    public function createRental(CreateRentalRequest $create_rental_request)
    {
        $params = $create_rental_request->all();

        $rental = $this->service->createRental($params);

        return ApiResponse::success($rental, "Rent created successfully", Response::HTTP_CREATED);
    }


    public function returnFilm($id)
    {

        $movie = $this->service->returnFilm($id);

        return ApiResponse::success($movie, "Film returned successfully");
    }
}


?>