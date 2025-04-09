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
                if (empty($article)) {
                    echo "<tr>";
                    echo "<td colspan='5' class='text text-center'><p class='alert alert-danger'>No articles found</p></td>";
                    echo "</tr>";
                } else {
                    foreach ($article as $value) {
                        echo "<tr>";
                        echo "<td>" . $value->getId() . "</td>";
                        echo "<td>" . $value->getName() . "</td>";
                        echo "<td>" . $value->getDescription() . "</td>";
                        echo "<td>" . $value->getStock() . "</td>";
                        echo "<td>" . $value->getPrice() . "</td>";
                        echo "<td><a href='" . BASE_URL . "/articles/delete/" . $value->getId() . "' class='btn btn-dark'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
         </tbody>
     </table>
 </main>