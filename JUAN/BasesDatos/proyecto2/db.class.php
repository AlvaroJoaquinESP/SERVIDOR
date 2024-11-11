<?php
class BaseDatos {
    private $conexion;

function __construct()
{
    try {
        $db = "pruebajuan";
        $user = "root";
        $password = "";
        $host = "localhost";

        $this->conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        return $this->conexion;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function obtenerTodos() {
    $sql="SELECT * FROM curso";
    return ($this->conexion->query($sql)->fetchAll());
}

function obtenerCurso($idCurso) {
    $sql="SELECT * FROM curso WHERE idCurso='$idCurso'";
    return ($this->conexion->query($sql)->fetch());
}

function insertarCurso($idCurso,$nombre,$aula){
    $sql="INSERT INTO curso (idCurso, nombre, aula) VALUES ('$idCurso', '$nombre', '$aula')";
    return ($this->conexion->query($sql));

}
}