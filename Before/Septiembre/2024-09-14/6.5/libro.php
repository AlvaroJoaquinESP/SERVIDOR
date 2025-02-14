<?php
class Libro
{
    private $titulo;
    private $autor;
    private $isbn;
    private $paginas;
    private $fechaPublicacion;
    private $numeroPrestados;
    private $numeroEjemplares;

    public function constructor($titulo = "", $autor = "", $isbn = "", $paginas = 0, $fechaPublicacion = "", $numeroEjemplares = 0, $numeroPrestados = 0)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->paginas = $paginas;
        $this->fechaPublicacion = $fechaPublicacion;
        $this->numeroPrestados = $numeroPrestados;
        $this->numeroEjemplares = $numeroEjemplares;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

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
     * Get the value of paginas
     */
    public function getPaginas()
    {
        return $this->paginas;
    }

    /**
     * Set the value of paginas
     *
     * @return  self
     */
    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;

        return $this;
    }

    /**
     * Get the value of fechaPublicacion
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set the value of fechaPublicacion
     *
     * @return  self
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get the value of numeroPrestados
     */
    public function getNumeroPrestados()
    {
        return $this->numeroPrestados;
    }

    /**
     * Set the value of numeroPrestados
     *
     * @return  self
     */
    public function setNumeroPrestados($numeroPrestados)
    {
        $this->numeroPrestados = $numeroPrestados;

        return $this;
    }

    /**
     * Get the value of numeroEjemplares
     */
    public function getNumeroEjemplares()
    {
        return $this->numeroEjemplares;
    }

    /**
     * Set the value of numeroEjemplares
     *
     * @return  self
     */
    public function setNumeroEjemplares($numeroEjemplares)
    {
        $this->numeroEjemplares = $numeroEjemplares;

        return $this;
    }


    public function prestamo()
    {
        if ($this->numeroEjemplares > 0) {
            $this->numeroPrestados++;
            $this->numeroEjemplares--;
            return true;
        }else {
            return false;
        }
    }

    public function devolucion() {
        if ($this->numeroPrestados > 0) {
            $this->numeroPrestados--;
            $this->numeroEjemplares++;
            return true;
        } else {
            return false;
        }
    }

    public function mostrar() {
        // Ya si eso...
    }
}
