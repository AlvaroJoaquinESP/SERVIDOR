<?php

// Conexion con BD
$conexion = new PDO("mysql:host=localhost;dbname=prueba", "root", "");

// Insert
try {
    $sql = "INSERT INTO  MARCAS VALUES(1, 'FIAT')";
    $conexion->query($sql);
    // Runtime ya que PDO exception no hereda directamente de Exception.
} catch (RuntimeException $e) {
    $e->getMessage();
}
// Select 
$sql =  "SELECT * FROM MARCAS";
$result = $conexion->query($sql)->fetchAll();

var_dump($result);

foreach ($result as $r) {
    echo $r['ID']." - ".  $r['Descripcion']."<br>";
}

// Separo los de fetchAll de los fetch individuales.
echo "<hr>";

// Insert de otro elemento
try {
    $sql = "INSERT INTO  MARCAS VALUES(2, 'FERRARI')";
    $conexion->query($sql);
    // Runtime ya que PDO exception no hereda directamente de Exception.
} catch (RuntimeException $e) {
    $e->getMessage();
}

// Select de un solo elemento
$sql =  "SELECT * FROM MARCAS WHERE ID = 2";
// En el fetch quito el all.
$result = $conexion->query($sql)->fetch();

// var_dump($result);

 echo $result['ID']." - ". $result['Descripcion'] . "<br>";







?>






