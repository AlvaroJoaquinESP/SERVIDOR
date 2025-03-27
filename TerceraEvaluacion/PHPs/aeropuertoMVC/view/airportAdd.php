<main>

    <!-- <?php
        // if(isset($message)) {
        //     echo "<p class='alert alert-primary' role='alert'>$message</p>";
        // }
        // Entiendo lo que dice, pero solo para añadir, como lo haría con otros
        // Supongo que de igual manera
    ?> -->

    <h1>Formulario de inserción</h1>
    <form action="<?= BASE_URL ?>/airport/new" method="post" class="form">
        <label for="location" class="form-label">Location</label>
        <input type="text" name="location" id="location" class="form-control">
        <br>
        <label for="numRoad" class="form-label">NumRoad</label>
        <input type="number" name="numRoad" id="numRoad" class="form-control">
        <br>
        <label for="gateway" class="form-label">Gateway</label>
        <input type="number" name="gateway" id="gateway" class="form-control">
        <br>
        <button class="btn btn-primary">Añadir</button>
    </form>
</main>