<div class="container mt-5">
    <form action="<?=BASE_URL?>article/update" method="post" class="mt-4">
        <div class="form-group">
            <label for="id">Introduzca ID artículo</label>
            <input type="number" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="stock">Introduzca el stock a aumentar</label>
            <input type="number" name="stock" id="stock" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
    </form>
</div>