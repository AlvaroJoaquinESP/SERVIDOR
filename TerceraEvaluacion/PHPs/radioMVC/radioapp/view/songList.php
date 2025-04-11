<main class="main">
    <table class="table table-striped">
        <thead>
            <th>TITULO</th>
            <th>ARTISTA</th>
            <th>FECHA</th>
            <?php
            if ($_SESSION['rol'] == "admin") {
                echo "<th>USER</th>";
            }
            ?>
            <th>DEDICATORIA</th>
        </thead>

        <tbody>
            <?php
            if (empty($songs)) {
                echo "<tr>";
                echo ($_SESSION['rol'] == "admin") ? "<td class='text text-center' colspan='5'>No existen canciones solicitadas</td>" : "<td class='text text-center' colspan='4'>No existen canciones solicitadas</td>";
                echo "</tr>";
            } else {
                foreach ($songs as $value) {
                    echo "<tr>";
                    echo "<td>" . $value->getTitle() . "</td>";
                    echo "<td>" . $value->getArtist() . "</td>";
                    echo "<td>" . $value->getCreated_at() . "</td>";
                    echo "<td>" . $value->getDedication() . "</td>";
                    if ($_SESSION['rol'] == "admin") {
                        echo "<td><a class='btn btn-danger' href='".BASE_URL."/song/emit/" .$value->getId(). "'>Emitir</a></td>";
                    } else {
                        echo "<td><a class='btn btn-danger' href='".BASE_URL."/song/delete/".$value->getId(). "'>Eliminar</a></td>";
                    }
                    echo "</tr>";
                }
                
            }

            ?>
        </tbody>
    </table>
</main>