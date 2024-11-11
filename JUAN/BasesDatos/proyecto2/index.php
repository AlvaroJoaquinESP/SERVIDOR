<?php
include_once "db.class.php";
$db = new BaseDatos();
$datos = $db->obtenerTodos();

// print_r($datos);
?>
<h1>Listado de cursos</h1>
<h3>Codigo - Nombre - Detalle</h3>

<?php
foreach ($datos as $element) {
    echo $element['idCurso'] . " - " . $element['nombre']." - ";
    $enlace = $element['idCurso'];
    echo "<a href='detalle.php?idCurso=".$enlace."'>Ver detalle</a> ";
    echo "<br/>";
}
?>

<hr>
<a href="inserta.php">Insertar</a>