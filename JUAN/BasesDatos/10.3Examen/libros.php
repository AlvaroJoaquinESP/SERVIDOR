<?php
require_once "cabecera.php";
require_once "db/libros.inc.php";

$libros = getLibros();

?>

<h1>Gestión de libros</h1>
CDU							
<table>
    <thead>
        <th>CDU</th>
        <th>titulo</th>
        <th>autor</th>
        <th>publicacion</th>
        <th>editorial</th>
        <th>num_paginas</th>
        <th>ISBN</th>
        <th>Editar</th>
        <th>Borrar</th>
    </thead>

    <tbody>
    <?php
    foreach($libros as $element) {
        echo "<tr>";
        
        echo "<td>";
        echo $element['CDU'];
        echo "</td>";

        echo "<td>";
        echo $element['titulo'];
        echo "</td>";
        
        echo "<td>";
        echo $element['autor'];
        echo "</td>";

        echo "<td>";
        echo $element['publicacion'];
        echo "</td>";

        echo "<td>";
        echo $element['editorial'];
        echo "</td>";

        echo "<td>";
        echo $element['num_paginas'];
        echo "</td>";

        echo "<td>";
        echo $element['ISBN'];
        echo "</td>";

        echo "<td>";
        echo "<a href='actualiza_libro.php?CDU=$CDU'>Actualizar</a>";
        echo "</td>";

        echo "<td>";
        echo "<a href='borrar_libro.php?CDU=$CDU'>Borrar</a>";
        echo "</td>";

        echo "</tr>";
    }

    ?>

    </tbody>
</table>