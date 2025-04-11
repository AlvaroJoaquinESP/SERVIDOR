<?php

class Song {
    
    private $id;
    private $user_id;
    private $status;
    private $title;
    private $artist;
    private $dedication;
    private $created_at;


    public function __construct($idP=0,$user_idP=0,$statusP="",$titleP="",$artistP="",$dedicationP="",$created_atP="2-2-2 2:2:2")
    {
        $this->id = $idP;
        $this->user_id = $user_idP;
        $this->status = $statusP;
        $this->title = $titleP;
        $this->artist = $artistP;
        $this->dedication = $dedicationP;
        $this->created_at = $created_atP;
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of artist
     */ 
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set the value of artist
     *
     * @return  self
     */ 
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get the value of dedication
     */ 
    public function getDedication()
    {
        return $this->dedication;
    }

    /**
     * Set the value of dedication
     *
     * @return  self
     */ 
    public function setDedication($dedication)
    {
        $this->dedication = $dedication;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}

?>