<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>· Iberia SL ·</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="card-header">
            <h1 class="text text-center">🛫IBERIA🛫</h1>
            <nav class="nav flex-row justify-content-center">
                <a class="nav-link" href="<?= BASE_URL ?>/airport/list">Listado</a>
                <?php
                if ($_SESSION['name'] == "admin") {
                    echo "<a class='nav-link' href=" . BASE_URL . "/airport/add" . ">Insertar</a>";
                }
                ?>

                <a class="nav-link" href="<?= BASE_URL ?>/airport/search">Buscar por localización</a>
                
            </nav>
        </header>
        <hr>

        <?php
        if (isset($message) && !empty($message)) {
            echo "<p class='alert alert-primary' role='alert'>$message</p>";
            // Limpio el mensaje.
            $message = '';
        }
        // Entiendo lo que dice, pero solo para añadir, como lo haría con otros
        // Supongo que de igual manera
        ?>