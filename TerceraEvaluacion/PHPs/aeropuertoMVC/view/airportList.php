<?php
require_once("repository/airportRepository.php");
require_once("view/airportHeader.php");
?>
<main>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Location</th>
                <th>NumRoad</th>
                <th>Gateway</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($aeropuerto as $valor) {
                echo "<tr>";
                    echo "<td>" . $valor->getId() . "</td>";
                    echo "<td>" . $valor->getLocation() . "</td>";
                    echo "<td>" . $valor->getNumRoad() . "</td>";
                    echo "<td>" . $valor->getGateway() . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</main>
<?php require_once("view/airportFooter.php");?>