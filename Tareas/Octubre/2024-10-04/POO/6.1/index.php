<?php
class Empleado{
    private $nombre;
    private $sueldo;
    
    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of sueldo
     */ 
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     *
     * @return  self
     */ 
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }


    function initialize($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }


    function print($nombre,$sueldo) {
        if($sueldo > 3000) {
            echo $nombre . 'tiene que pagar impuestos';
        } else {
            echo $nombre . 'no tiene que pagar impuestos';
        }

    }
}                       









?>                      