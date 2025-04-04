<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor</title>
</head>

<body>
    <form action="" method="post">
        <label for="num1">Num1</label>
        <input type="number" name="num1" id="num1">
        <br>
        <label for="num2">Num2</label>
        <input type="number" name="num2" id="num2">
        <br><label for="num3">Num3</label>
        <input type="number" name="num3" id="num3">
        <br>
        <button>Enviar</button>
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cipri[] = $_REQUEST['num1'];
    $cipri[] = $_REQUEST['num2'];
    $cipri[] = $_REQUEST['num3'];
    echo max($cipri);
}

?>