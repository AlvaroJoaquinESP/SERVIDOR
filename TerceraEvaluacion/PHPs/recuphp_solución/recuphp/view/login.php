<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">ACCESO APP</h1>
        <form action="<?= BASE_URL ?>user/validate" method="post" class="mt-4">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" class="form-control">
            </div>
            <div class="form-group">
                <label for="pass">Contraseña:</label>
                <input type="password" name="pass" id="pass" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
        <?php
        // Display message
        if (isset($message)) {
            echo '<div class="alert alert-info mt-3">' . $message . '</div>';
        }
        ?>
    </div>
</body>
</html>
