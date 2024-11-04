<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="eval.css">
</head>

<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th></th>
        </tr>

        <a href="index.html">Crear Usuario</a>
        <br>

        <a href="cerrarSesion.php">Cerrar Sesion</a>

        <?php
        require_once("usuario.php");
        session_start();
        // Si no tengo creado el array de usuarios lo creo.
        if (!isset($_SESSION["usuario"])) {
            $_SESSION["usuario"] = [];
        }

        if (count($_SESSION["usuario"]) == 0) {
            echo "<tr><td colspan = 3>No hay usuarios creados </td></tr>";
        }
        foreach ($_SESSION["usuario"] as $usu) {
            echo "<tr>";
            echo "<td>".$usu->getNombre()."</td>";
            echo "<td>".$usu->getApellidos()."</td>";
            echo "<td>".$usu->getEdad()."</td>";
            echo "<td>"."<a href= 'eliminar.php?name=".$usu->getNombre()."&surname=". $usu->getApellidos()."&age=". $usu->getEdad()."'>Eliminar</a>" . "</td>";
            echo "</tr>";
        }

        

        ?>

    </table>
</body>

</html>