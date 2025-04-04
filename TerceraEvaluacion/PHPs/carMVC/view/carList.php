<?php require_once("repository/carRepository.php"); ?>
<main class="main">
    <?php
    echo ($_SESSION['role'] == "admin") ? "<h1 class='text text-center'>Vehículos en la Base de Molina de Segura</h1>" : "<h1 class='text text-center'>Nuestros coches</h1>";
    ?>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Model</th>
            <th>Brand</th>
            <th>Year</th>
            <th>Stock</th>
        </thead>
        <tbody>
            <?php
            foreach ($car as $value) {
                echo "<tr>";
                echo "<td>" . $value->getId() . "</td>";
                echo "<td>" . $value->getModel() . "</td>";
                echo "<td>" . $value->getBrand() . "</td>";
                echo "<td>" . $value->getYear() . "</td>";
                echo "<td>" . $value->getStock() . "</td>";
                if ($_SESSION['role'] == "admin") {
                    echo "<td><a class='btn btn-danger' href='" . BASE_URL . "/car/delete/".  $value->getId() . "'>Eliminar</a></td>";
                    echo "<td><a class='btn btn-warning' href='" . BASE_URL . "/car/edit/".  $value->getId() . "'>Editar</a></td>";     
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
</main>