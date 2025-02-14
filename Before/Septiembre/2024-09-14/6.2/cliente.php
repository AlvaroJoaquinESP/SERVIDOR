<?php
class Cliente
{
    private $DNI;
    private $name;
    private $adress;
    private $phone;

    public function __construct()
    {
        $this->DNI = "";
        $this->name = "";
        $this->adress = "";
        $this->phone = "";
    }

    function insertarCliente($DNI, $name, $adress, $phone)
    {
        $this->DNI = $DNI;
        $this->name = $name;
        $this->adress = $adress;
        $this->phone = $phone;
    }

    function mostrarCliente()
    {
        echo "DNI: " . $this->DNI . " Nombre: " .
            $this->name . "Nombre: " .
            $this->name . " Adress: " .
            $this->adress .
            " Phone: " . $this->phone;
    }
}

