<main class="main">
    <?php

    ?>
    <form action="<?= BASE_URL ?>/articles/edit/" method="post" class="form">
        <label for="select" class="form-label">Select the id of the product that you want to edit</label>
        <br>
        <select name="select" id="select">
            <?php foreach ($article as $value) {
                echo "<option value=" . $value->getId() . ">" . $value->getId() . "</option>";
            } ?>
        </select>
        <hr>
        <label for="stock" class="form-label">New Stock</label>
        <input type="number" name="stock" id="stock" class="form-control">
        <button class="btn btn-warning">Editar</button>
    </form>

</main>