<main class="main">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Pages</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (empty($books)) {
                echo "<tr>";
                    echo "<td class='alert text-center' colspan='5'>No Books Given</td>";
                echo "</tr>";
            } else {
                foreach ($books as $value) {
                    echo "<tr>";
                        echo "<td>" . $value->getId() . "</td>";
                        echo "<td>" . $value->getTitle() . "</td>";
                        echo "<td>" . $value->getAuthor() . "</td>";
                        echo "<td>" . $value->getYear() . "</td>";
                        echo "<td>" . $value->getPages() . "</td>";
                        echo "<td><a class='btn btn-secondary' href='" . BASE_URL . "/book/delete/" . $value->getId() . "'>Delete</a></td>";
                        echo "<td><a class='btn btn-warning' href='" . BASE_URL . "/book/edit/" . $value->getId() . "'>Edit</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</main>