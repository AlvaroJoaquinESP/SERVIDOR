<?php
include "bd.inc.php";

$datos = obtener_todos_contactos2();
?>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Detalles</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
            <?php
                foreach($datos as $elemento) {
                    $telefono = $elemento['telefono'];
                    echo "<tr>";
                       
                        echo "<td>";
                        echo $elemento['nombre'];
                        echo "</td>";
                       
                        echo "<td>";
                        echo "<a href='detalle.php?telefono = $telefono'>Ver Detalle</a>";
                        echo "</td>";
                       
                        echo "<td>";
                        echo "<a href='borrar.php?telefono = $telefono'>Borrar</a>";
                        echo "</td>";

                    echo "</tr>";
                }

            ?>

    </tbody>

</table>

<hr>

<a href="insertar.php">Insertar</a>