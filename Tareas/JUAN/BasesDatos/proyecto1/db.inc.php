<?php
function conectar()
{

    try {
        $db = "pruebajuan";
        $user = "root";
        $password = "";
        $host = "localhost";

        $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        return $conexion;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function obtenerTodos() {
    $conexion=conectar();
    $sql="SELECT * FROM curso";
    return ($conexion->query($sql)->fetchAll());
}

function obtenerCurso($idCurso) {
    $conexion=conectar();
    $sql="SELECT * FROM curso WHERE idCurso='$idCurso'";
    return ($conexion->query($sql)->fetch());
}

function insertarCurso($idCurso,$nombre,$aula){
    $conexion=conectar();
    $sql="INSERT INTO curso (idCurso, nombre, aula) VALUES ('$idCurso', '$nombre', '$aula')";
    return ($conexion->query($sql));

}
