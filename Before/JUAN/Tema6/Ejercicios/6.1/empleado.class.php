<?php
class Empleado {
    private $nombre;
    private $sueldo;


    public function __construct($nombre = "",$sueldo = 0)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
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

    // Methods.

    public function mostrar() {
        if ($this->sueldo > 3000) {
            echo "$this->nombre debe de pagar impuestos";
        } else {
            echo "$this->nombre NO debe de pagar impuestos";
        }
    }
}


?>