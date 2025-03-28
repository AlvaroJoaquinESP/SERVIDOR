<div class="container mt-5">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>STOCK</th>
                <th>PRECIO</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) { ?>
                <tr>
                    <th><?= $article->getId()?></th>
                    <th><?= $article->getName()?></th>
                    <th><?= $article->getDescription()?></th>
                    <th><?= $article->getStock()?></th>
                    <th><?= $article->getPrice()?></th>
                    <?php
                    if ($_SESSION["rol"] == "admin") { ?>
                        <td><a href="<?= BASE_URL?>article/delete/<?= $article->getId() ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>