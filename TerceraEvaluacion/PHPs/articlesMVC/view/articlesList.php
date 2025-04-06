<?php require_once("repository/articlesRepository.php"); ?>
<main class="main">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($article as $value) {
                echo "<tr>";
                    echo "<td>" . $value->getId() . "</td>";
                    echo "<td>" . $value->getName() . "</td>";
                    echo "<td>" . $value->getDescription() . "</td>";
                    echo "<td>" . $value->getStock() . "</td>";
                    echo "<td>" . $value->getPrice() . "</td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>

</main>