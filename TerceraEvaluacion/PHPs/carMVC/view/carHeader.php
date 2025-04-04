<?php require_once("controller/carController.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>· FlexiCar ·</title>
    <link rel="stylesheet" href="<?=BASE_URL?>/styles/bootstrap.css">
</head>

<body>
    <div class="container mt-3">
        <header>
            <h1 class="text text-center">🏎️🚗FLEXICAR🚗🏎️</h1>
            <br>
            <nav class="nav justify-content-center">
                <ul class="btn-toolbar">
                    <a class="nav-link" href="<?=BASE_URL?>/car/list">Nuestros Coches</a> <!-- Listar -->
                    <a class="nav-link" href="<?=BASE_URL?>/car/add">Compramos tu Coche</a><!-- Insertar -->
                </ul>
            </nav>
        </header>
        <?php
            if (isset($message)) {
                echo "<p class='alert alert-info'>$message</p>";
                $message = "";
            }
        ?>
        <hr>