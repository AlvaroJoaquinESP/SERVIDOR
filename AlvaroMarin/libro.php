<?php
class Libro
{
    private $ID;
    private $isbn;
    private $nombre;
    private $estado;
    private $stock;
    private $ventas;
    private $precio;

    function __construct(
        $isbn = "",
        $nombre = "",
        $estado = "",
        $stock = 0,
        $ventas = 0,
        $precio = 0.0
    ) {
        $this->isbn = $isbn;
        $this->nombre = $nombre;
        $this->estado = $estado;
        $this->stock = $stock;
        $this->ventas = $ventas;
        $this->precio = $precio;
    }

    /**
     * Get the value of ID
     */ 
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set the value of ID
     *
     * @return  self
     */ 
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
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
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of ventas
     */ 
    public function getVentas()
    {
        return $this->ventas;
    }

    /**
     * Set the value of ventas
     *
     * @return  self
     */ 
    public function setVentas($ventas)
    {
        $this->ventas = $ventas;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    function __toString()
    {
        return "Id: " . $this->ID. " \nISBN: " .$this->isbn. "\nNOMBRE:" .$this->nombre. "\nESTADO:".$this->estado. "\nSTOCK:" .$this->stock."\nVENTAS: " .$this->ventas. "\nPRECIO:" .$this->precio;
    }
}
