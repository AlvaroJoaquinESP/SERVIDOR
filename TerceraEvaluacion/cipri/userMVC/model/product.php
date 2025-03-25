<?php
class Producto {
    private $cod;
    private $short_name;
    private $pvp;
    private $name;

    public function __construct($codP = 0, $pvpP = 0, $short_nameP = "", $nameP = "")
    {
        $this->cod = $codP;
        $this->pvp = $pvpP;
        $this->short_name = $short_nameP;
        $this->name = $nameP;
    }

    


    /**
     * Get the value of cod
     */ 
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set the value of cod
     *
     * @return  self
     */ 
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * Get the value of short_name
     */ 
    public function getShort_name()
    {
        return $this->short_name;
    }

    /**
     * Set the value of short_name
     *
     * @return  self
     */ 
    public function setShort_name($short_name)
    {
        $this->short_name = $short_name;

        return $this;
    }

    /**
     * Get the value of pvp
     */ 
    public function getPvp()
    {
        return $this->pvp;
    }

    /**
     * Set the value of pvp
     *
     * @return  self
     */ 
    public function setPvp($pvp)
    {
        $this->pvp = $pvp;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}


?>