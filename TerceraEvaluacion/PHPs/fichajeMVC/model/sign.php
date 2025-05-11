<?php

class Sign {
    private $id;
    private $user_id;
    private $timestamp_sign;
    private $sign_type;
    private $created_at;

    public function __construct($idP = 0,$user_idP = 0, $timestamp_signP = "yyyy-mm-dd", $sign_typeP = "Entrada", $created_atP = "yyyy-mm-dd")
    {
        $this->id = $idP;
        $this->user_id = $user_idP;
        $this->timestamp_sign = $timestamp_signP;
        $this->sign_type = $sign_typeP;
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
     * Get the value of timestamp_sign
     */ 
    public function getTimestamp_sign()
    {
        return $this->timestamp_sign;
    }

    /**
     * Set the value of timestamp_sign
     *
     * @return  self
     */ 
    public function setTimestamp_sign($timestamp_sign)
    {
        $this->timestamp_sign = $timestamp_sign;

        return $this;
    }

    /**
     * Get the value of sign_type
     */ 
    public function getSign_type()
    {
        return $this->sign_type;
    }

    /**
     * Set the value of sign_type
     *
     * @return  self
     */ 
    public function setSign_type($sign_type)
    {
        $this->sign_type = $sign_type;

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