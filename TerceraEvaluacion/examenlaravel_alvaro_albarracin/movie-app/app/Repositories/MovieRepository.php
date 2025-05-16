<?php

namespace App\Repositories;

use App\Models\Movie;

class MovieRepository
{

    public function getAllMovies()
    {
        return Movie::all();
    }

    
    public function searchMovie($id)
    {
        return Movie::with('rentalMovie')->find($id);
    }


    public function findMovie($id)
    {
        return Movie::find($id);
    }


    public function saveMovie(Movie $movie)
    {
        $movie->save();

        return $movie;
    }
    
}


?>