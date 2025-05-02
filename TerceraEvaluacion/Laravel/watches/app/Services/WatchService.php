<?php


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
}



?>