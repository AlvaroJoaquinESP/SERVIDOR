<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?BASE_URL?>/user/login" method="post">
        <h2>Formulario Login</h2>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
    </form>
</body>

</html>