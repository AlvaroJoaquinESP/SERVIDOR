<?php

namespace App\Repositories;

use App\Http\Requests\CreateWatchRequest;
use App\Models\Watch;

class WatchRepository
{
    public function getAll()
    {
        return Watch::all();
    }


    public function get($id)
    {
        // return Watch::with(['Diver','ROLEX', 'SPORT'])->find($id);
        return Watch::findOrFail($id);

        /**
         * Con este no recibe la exception. Le puedo poner el id que quiera y pone que lo encuentra.
         * return Watch::find($id);
         */
    }



    public function destroy($id)
    {
        return Watch::find($id);
    }


    public function create(Watch $watch) 
    {
        $watch->save();

        // Para que me devuelva todo el objeto al crearlo.
        return $watch;
    }
}
