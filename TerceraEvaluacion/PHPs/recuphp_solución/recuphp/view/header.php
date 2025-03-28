<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario App</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white p-3 mb-4">
        <div class="container">
            <h1 class="mb-3">INVENTARIO APP</h1>
            <nav class="nav">
                <a class="nav-link text-white" href="<?=BASE_URL?>article/list">Listado</a>
                <a class="nav-link text-white" href="<?=BASE_URL?>article/updateView">Actualizar stock</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container mt-5">
            <?php
            // Display message
            if (isset($message)) {
                echo '<div class="alert alert-info mt-3">' . $message . '</div>';
            }
            ?>
        </div>
