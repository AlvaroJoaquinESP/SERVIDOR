<main class="main">
    <form action="<?= BASE_URL ?>/articles/add" method="post">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control">
        <br>
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" id="description" class="form-control">
        <br>
        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" id="stock" class="form-control">
        <br>
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" id="price" class="form-control">
        <br>
        <button class="btn btn-info">Add</button>
    </form>
</main>