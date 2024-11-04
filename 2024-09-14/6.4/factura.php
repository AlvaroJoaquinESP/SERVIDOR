<?php
class Factura {
    private Cliente $cliente;
    private $articulos;

    // Métodos.
    public function crearFactura($cliente, $articulos) {
        $this->cliente = $cliente;
        $this->articulos = $articulos;
    }

    public function mostrarFactura() {
         
        count($this->articulos);

        $this->cliente->mostrarCliente();
    }

    /**
     * Get the value of cliente
     */ 
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     *
     * @return  self
     */ 
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get the value of articulo
     */ 
    public function getArticulo()
    {
        return $this->articulos;
    }

    /**
     * Set the value of articulo
     *
     * @return  self
     */ 
    public function setArticulo($articulo)
    {
        $this->articulos = $articulo;

        return $this;
    }
}





?>