<?php

$conexion = new PDO("mysql:host=localhost;dbname=prueba", "root", "");
// $consulta = $conexion->prepare("INSERT INTO frutas (nombre, origen, color) VALUES ('papaya', 'murcia', 'verde')"); // En este caso, ? es el valor del array de marcas.
// $consulta->execute();
$consulta = $conexion->prepare("SELECT * FROM FRUTAS");
$consulta->execute();
 echo "<br>";
// $consulta->setFetchMode(PDO::FETCH_ASSOC);
$todo = $consulta->fetchAll(PDO::FETCH_ASSOC);
// print_r($todo);


foreach ($todo as $fruta) {
    echo $fruta['Nombre']. " ". $fruta['Origen'] ." ". $fruta['Color']."<br>";
}

echo "<br>";

// $todo1 = $consulta->fetchAll(PDO::FETCH_NAMED);
// $consulta->execute();
// foreach ($todo1 as $fruta) {
//     echo $fruta['Nombre']. " ". $fruta['Origen'] ." ". $fruta['Color']."<br>";
//  }

// echo "<br>";
$consulta->execute();
$todo2 = $consulta->fetchAll(PDO::FETCH_BOTH);
foreach ($todo2 as $fruta) {
    var_dump($fruta);
    echo $fruta['Nombre']. " ". $fruta['Origen'] ." ". $fruta['Color']."<br>";
    // echo $fruta[0]. " ". $fruta[1] ." ". $fruta[2]."<br>";

}





// $todo3 = $consulta->fetchAll(PDO::FETCH_BOUND);
// $consulta->execute();
// $consulta->bindColumn("ID_nombre",$id);
// $consulta->bindColumn("Nombre",$nombre);
// $consulta->bindColumn("Origen",$origen);

// while ($row = $consulta->fetch(PDO::FETCH_BOUND)) {
//     $futas = $id . ": " . $nombre. ": " . $origen;
//     echo $futas . "<br>";
// }


$todo4 = $consulta->fetchAll(PDO::FETCH_NUM);
$consulta->execute();
foreach ($todo4 as $fruta) {
    // print_r($fruta);
    echo $fruta[0]. " ". $fruta[1] ." ". $fruta[2]."<br>";
}


$todo5 = $consulta->setFetchMode(PDO::FETCH_OBJ);
$consulta->execute();
while ($row  = $consulta->fetch()) {
    echo $row->nombre.  "<br>";
    echo $row->origen.  "<br>";
    echo $row->color.  "<br>";
}




?>