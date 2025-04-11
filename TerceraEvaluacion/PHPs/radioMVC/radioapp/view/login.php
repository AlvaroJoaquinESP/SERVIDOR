<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>· Log In ·</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/styles/bootstrap.css">
</head>

<body>
    <div class="container mt-3">
        <h1 class="text text-center">Log In</h1>
        <?php
            if (isset($message)) {
                echo "<p class='alert alert-danger'>$message</p>";
            }
        ?>
        <form action="<?= BASE_URL ?>/user/validate" class="form" method="post">
            <label for="name" class="form-label" >Usuario</label>
            <input type="text" name="name" id="name" class="form-control" maxlength="255" required>
            <br>

            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" maxlength="255" required>
            <br>
            <button class="btn btn-primary">Log In</button>
        </form>
    </div>
</body>

</html>