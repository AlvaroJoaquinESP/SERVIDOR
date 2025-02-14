<?php
require_once "articulo.class.php";

$articulo = new Articulo();
$articulo->muestraArticulo();
$articulo->insertaArticulo("123","Arroz",1.25);
echo "<hr>";
$articulo->muestraArticulo();

?>