<?php
require_once("libro.php");

function addBook($conexion, $isbn, $nombre, $estado, $stock, $precio)
{
    

    if (consultarExistente($conexion, $isbn)) {
        echo "El libro ya ha sido añadido";
    } else {
        try {
            $sql = "INSERT INTO libro (isbn,nombre,estado,stock,ventas,precio) VALUES(:isbn,:nombre,:estado,:stock,0,:precio)";
            $consulta = $conexion->prepare($sql); //->execute();
            $consulta->bindParam(":isbn", $isbn);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":estado", $estado);
            $consulta->bindParam(":stock", $stock);
            $consulta->bindParam(":precio", $precio);
            $consulta->execute();
        } catch (RuntimeException $e) {
            $e->getMessage();
        }    
    }
    
}


function consultarExistente ($conexion, $isbn) {
    $sql = "SELECT COUNT(*) FROM LIBRO WHERE :isbn = $isbn";
    $consulta = $conexion->prepare($sql)->execute();
}


//Main
    $conexion = new PDO("mysql:host=localhost;dbname=prueba", "root", "");
    $nombre = $_REQUEST["nom"];
    $isbn = $_REQUEST["isbn"];
    $stock = $_REQUEST["stock"];
    $estado = $_REQUEST["estado"];
    $precio = $_REQUEST["precio"];
    $existe = false;
    addBook($conexion, $isbn, $nombre, $estado, $stock, $precio);



