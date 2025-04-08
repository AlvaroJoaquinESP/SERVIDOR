<main class="main">
    <?php

    ?>
    <form action="<?= BASE_URL ?>/articles/edit" method="post" class="form">
        <label for="select" class="form-label">Select the id of the product that you want to edit</label>
        <br>
        <select name="select" id="select" class="form-control">
            <?php foreach ($article as $value) {
                echo "<option value=" . $value->getId() . ">" . $value->getName() . "</option>";
            } ?>
        </select>
        <hr>
        <label for="stock" class="form-label">New Stock</label>
        <input type="number" name="stock" id="stock" class="form-control">
        <br>
        <button class="btn btn-success">Editar</button>
    </form>

</main>