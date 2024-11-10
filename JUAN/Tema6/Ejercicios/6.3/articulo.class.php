<?php
class Articulo
{
    private $codigo;
    private $descripcion;
    private $pvp;

    public function __construct()
    {
        $this->codigo = "";
        $this->descripcion = "";
        $this->pvp = 0;
    }

    public function insertaArticulo($codigo, $descripcion, $pvp)
    {
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->pvp = $pvp;
    }

    public function muestraArticulo()
    {
        echo "Codigo: $this->codigo, Descripción: $this->descripcion, PVP: $this->pvp";
    }

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

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
}
