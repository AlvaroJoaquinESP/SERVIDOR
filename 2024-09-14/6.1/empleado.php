<?php
class Empleado {
    private $nombre;
    private $sueldo;

    // Constructor.
    public function __construct($nombreP = "", $sueldoP = 0) {
        $this->nombre = $nombreP;
        $this->sueldo = $sueldoP;
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

    // ¿Como compruebo si un parámetro está en el request?
    function inicializar() {
        if (isset($_REQUEST["name"]) && isset($_REQUEST["salary"])) {
            $this->nombre = $_REQUEST["name"];
            $this->sueldo = $_REQUEST["salary"];
        }
    }

    function imprimir() {
        if ($this->sueldo >= 3000) {
            echo $this->nombre . " debe pagar impuestos ya que su sueldo
             " . $this->sueldo . " supera los 3000€";
        } else {
            echo $this->nombre . " no debe pagar impuestos ya que su sueldo
            " . $this->sueldo . " no supera los 3000€";
        }
    }
}

$a = new Empleado();

$a->inicializar();
$a->imprimir();




?>