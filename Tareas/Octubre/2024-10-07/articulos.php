<?php
class Articulos {
    //Atributos.
    private $nombre;
    private $url;
    private $precio;
    private $descripcion;

    //Constructor.
    public function __construct($nombre = '', $url = '', $precio = 0, $descripcion = '') {
        $this->nombre = $nombre;
        $this->url = $url;
        $this->precio = $precio;
        $this->descripcion = $descripcion;

    }

    //Getters & Setters.

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
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

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


    public function __toString()
    {
        return 'Nombre'.$this->nombre. ' '.
        'URL'.$this->url.' '.$this->precio. ' '.
        $this->descripcion;
    }



}




?>