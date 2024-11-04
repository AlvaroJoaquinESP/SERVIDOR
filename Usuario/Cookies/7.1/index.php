<?php
if (isset($_COOKIE["idioma"])) {
    header("location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi app</title>
</head>
<body>

    <form action="establecerIdioma.php" method="post">
        <select name="idioma" id="">
            <option value="es">Español</option>
            <option value="fr">Francés</option>
            <option value="en">Inglés</option>
            <option value="de">Alemán</option>
            <option value="delete">Delete</option>
        </select>
        <button>Guardar</button>
    </form>
</body>
</html>