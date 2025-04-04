<main>

    
    <h1>Formulario de inserción</h1>
    <form action="<?= BASE_URL ?>/airport/newImport" method="post" class="form">
        <label for="file" class="form-label">File</label>
        <input type="file" name="fileway" id="file" class="form-control" required>
        <br>
        <button class="btn btn-primary">Añadir</button>
    </form>
</main>