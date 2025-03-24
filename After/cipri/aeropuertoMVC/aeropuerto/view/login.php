<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>· Iberia SL ·</title>
</head>
<body>
    <h1>Formulario</h1>
    <hr>
    <form action="<?=BASE_URL?> /user/validate" method="post">
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name" maxlength="255">
        <br>
        <label for="name">Contraseña: </label>
        <input type="password" name="password" id="password" maxlength="255">
        <br>
        <button>Acceder</button>
    </form>
</body>
</html>