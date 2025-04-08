<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>· Articles ·</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/styles/bootstrap.css">
</head>

<body>
    <div class="container mt-3">
        <h1 class="text text-center">STOCK APP</h1>
        <nav class="nav flex-row justify-content-center">
            <a class="nav-link" href="<?= BASE_URL ?>/articles/list">List</a>
            <a class="nav-link" href="<?= BASE_URL ?>/articles/showEdit">Update Stock</a>
            <a class="nav-link" href="<?= BASE_URL ?>/articles/showAdd">Add Product</a>
        </nav>
        <?php
        if (!empty($message)) {
            echo "<p class='alert alert-info'>$message</p>";
        }
        ?>
        <hr>