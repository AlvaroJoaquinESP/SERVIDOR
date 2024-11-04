<?php
class Alumno
{
    private $nombre;
    private $apellidos;
    private $email;
    private $asignaturas;


    public function __construct($nombre = "", $apellidos = "", $email = "", $asignaturas = [])
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->asignaturas = $asignaturas;
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
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of asignaturas
     */
    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

    /**
     * Set the value of asignaturas
     *
     * @return  self
     */
    public function setAsignaturas($asignaturas)
    {
        $this->asignaturas = [];

        return $this;
    }

    public function accesoFct()
    {
        foreach ($this->asignaturas as $value) {
            $doesntGo = false;
            if ($value < 5) {
                $doesntGo = true;
                break;
            }
            return $doesntGo;
        }
    }

    public function avgGrades()
    {
        $suma = 0;
        foreach ($this->asignaturas as $value) {
            $suma += $value;
        }
        return $suma / count($this->asignaturas);
    }


    public function show() {
        $texto = $this->accesoFct() ? 'NO' : 'SI';
        echo "El alumno {$this->apellidos}, 
        {$this->nombre} tiene de nota media: {$this->avgGrades()} y
        {$texto}";
        
    }
}
