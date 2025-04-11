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

        <header>
            <h1 class="text text-center white">REQUEST RADIO APP</h1>
            <nav class="nav flex-row justify-content-center">
                <?php
                if ($_SESSION['name'] == "admin") {
                    echo "<a href='" .BASE_URL. "/song/list' class='nav-link'>Canciones</a>";
                } else {
                    echo "<a href='" .BASE_URL. "/song/list' class='nav-link'>Mis canciones</a>";
                    echo "<a href='" .BASE_URL. "/song/showAdd' class='nav-link'>Solicitar canción</a>";
                }
                ?>

            </nav>
        </header>
        <hr>