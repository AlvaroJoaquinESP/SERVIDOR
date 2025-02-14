<?php
class Articulo
{
    // Atributos.
    private $codigo;
    private $descripcion;
    private $pvp;

    // Constructor.
    public function __constuct()
    {
        $this->codigo = "";
        $this->descripcion = "";
        $this->pvp = 0;
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



    function insertaArticulo($codigoP, $descripcionP, $pvpP)
    {
        $this->codigo = $codigoP;
        $this->descripcion = $descripcionP;
        $this->pvp = $pvpP;
    }

    function muestraArticulo()
    {
        echo "Codigo: " . $this->codigo . " Descripcion: " .
            $this->descripcion .
            " PVP: " . $this->pvp;
    }
}
