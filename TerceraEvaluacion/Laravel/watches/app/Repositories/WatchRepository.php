<?php

use App\Models\Watch;

class WatchRepository 
{
    public function getAll()
    {
        return Watch::all();
    }
}



?>