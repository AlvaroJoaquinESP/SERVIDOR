<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h2>Formulario Login</h2>
    <form action="<?= BASE_URL ?>/user/login" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="password">Contaseña:</label>
        <input type="text" name="password" id="password">
        <br>
        <button>Entrar</button>
    </form>

</body>

</html>