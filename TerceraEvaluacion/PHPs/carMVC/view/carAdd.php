<main class="main">
    <h1 class="text text-center">Introduzca los datos de su vehículo</h1>
    <form action="<?= BASE_URL ?>/car/addCar" method="post" class="form-control">
        <label for="model" class="form-label">Modelo</label>
        <input type="text" name="model" id="model" class="form-control" maxlength="255" required>
        <br>

        <label for="brand" class="form-label">Brand</label>
        <input type="text" name="brand" id="brand" class="form-control" maxlength="255" required>
        <br>

        <label for="year" class="form-label">Year</label>
        <input type="number" name="year" id="year" class="form-control" maxlength="11" required>
        <br>

        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" id="stock" class="form-control" maxlength="11" required>
        <br>
        <button class="btn btn-success m-2">Vender</button>
    </form>
</main>
<br>