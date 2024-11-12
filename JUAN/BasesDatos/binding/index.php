<?php
include_once "db.class.php";


$datos = obtener_todos_contactos();

// print_r($datos);

?>

<table border="1" width="100%">
    <thead>
        <th>Nombre</th>
        <th>Ver detalles</th>
        <th>Borrar</th>
    </thead>
    <tbody>
        <?php
        foreach ($datos as $element) {
            // PK en una variable 
            $telefono = $element['telefono'];
            echo "<tr>";
            echo "<td>";
            echo $element['nombre'];
            echo "</td>";

            echo "<td>";
            echo "<a href='detalle.php?telefono=$telefono'>Ver detalle</a>";
            echo "</td>";

            echo "<td>";
            echo "<a href='borrar.php?telefono=$telefono'>Borrar</a>";
            echo "</td>";

            echo "</tr>";
        }

        ?>
    </tbody>
</table>
<hr>
<a href="insertar.php">Insertar nuevo contacto</a>