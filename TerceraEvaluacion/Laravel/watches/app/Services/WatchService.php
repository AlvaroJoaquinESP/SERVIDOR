<?php

namespace App\Services;

use App\Exceptions\WatchNotFoundException;
use App\Models\Watch;
use App\Repositories\WatchRepository;
use Illuminate\Http\Response;

class WatchService
{
    protected $watchRepository;

    public function __construct(WatchRepository $watch_repository)
    {
        $this->watchRepository = $watch_repository;        
    }


    public function getAll()
    {
        return $this->watchRepository->getAll();
    }



    public function get($id)
    {
        $watch = $this->watchRepository->get($id);

        if (!$watch) {
            throw new WatchNotFoundException("The id {$id} does not exists", Response::HTTP_NOT_FOUND);
        }

        return $watch;
    }


    public function destroy($id)
    {
        $watch = $this->watchRepository->destroy($id);

        if (!$watch) {
            throw new WatchNotFoundException("The id {$id} does not exists", Response::HTTP_NOT_FOUND);
        }

        return $watch;
    }


    public function create($params)
    {
        $watch = new Watch();

        $watch->fill($params);

        return $this->watchRepository->create($watch);
    }
}



?>