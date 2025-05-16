<?php

namespace App\Services;

use App\Enums\RentalStatusEnum;
use App\Exceptions\MovieNotFound;
use App\Exceptions\PreconditionCustomerFailed;
use App\Exceptions\PreconditionMovieStockFailed;
use App\Exceptions\RentalNotFound;
use App\Models\Rental;
use App\Repositories\MovieRepository;
use App\Repositories\RentalRepository;
use Illuminate\Http\Response;

class Service
{
    protected $movieRepository;
    protected $rentalRepository;

    public function __construct(MovieRepository $movie_repository, RentalRepository $rental_repository)
    {
        $this->movieRepository = $movie_repository;
        $this->rentalRepository = $rental_repository;
    }


    public function getAllMovies()
    {
        $movie = $this->movieRepository->getAllMovies();
        return $movie;
    }


    public function searchMovie($id)
    {
        $movie = $this->movieRepository->searchMovie($id);

        if (!$movie) {
            throw new MovieNotFound("Movie with id {$id} not found", Response::HTTP_NOT_FOUND);
        }

        return $movie;
    }


    public function createRental($params)
    {
        $rentalObj = new Rental();
        $movie_id = $params['movie_id'];
        $customer_id = $params['customer_id'];
        $status = RentalStatusEnum::INCIDENCE;

        $movie = $this->movieRepository->findMovie($movie_id);

        if (!$movie) {
            throw new MovieNotFound("Movie with id {$movie_id} was not found", Response::HTTP_NOT_FOUND);
        }

        if ($movie->stock <= 0) {
            throw new PreconditionMovieStockFailed("Out of stock", Response::HTTP_PRECONDITION_FAILED);
        }
        
        

        $rental = $this->rentalRepository->findStatusCustomer($customer_id, $status);

        if (!empty($rental)) {
            throw new PreconditionCustomerFailed("The customer has an incidence", Response::HTTP_PRECONDITION_FAILED);
        }

        $movie->stock += -1;
        $this->movieRepository->saveMovie($movie);

        // $rental->fill($params);
        $rentalObj->rental_date = $params['rental_date'];
        $rentalObj->return_date = $params['return_date'];
        $rentalObj->movie_id = $movie_id;
        $rentalObj->customer_id = $customer_id;
        $rentalObj->status = RentalStatusEnum::ACTIVE;

        return $this->rentalRepository->saveRental($rentalObj);
    }


    public function returnFilm($id)
    {
        
        $rental = $this->rentalRepository->findRental($id);

        if (!$rental) {
            throw new RentalNotFound("Does not exists the rental {$id}", Response::HTTP_NOT_FOUND);
        }

        $movie_id = $rental->movie_id;
        $movie = $this->movieRepository->findMovie($movie_id);
        $movie->stock += 1;

        $rental->status = RentalStatusEnum::RETURNED;
        $this->rentalRepository->saveRental($rental);
        return $this->movieRepository->saveMovie($movie);


    }
}
