<main class="main">
    <h2 class="text text-center">Solicitar Canción</h2>
    <form action="<?= BASE_URL ?>/song/add" class="form" method="post">
        <label for="title" class="form-label">Introduzca el título de la canción</label>
        <input type="text" name="title" id="title" class="form-control" maxlength="255" required>
        <br>

        <label for="artist" class="form-label">Introduzca artista</label>
        <input type="text" name="artist" id="artist" class="form-control" maxlength="255" required>
        <br>

        <label for="dedication" class="form-label">Dedicada a</label>
        <input type="text" name="dedication" id="dedication" class="form-control" maxlength="255" required>
        <br>

        <button class="btn btn-info">Solicitar</button>
    </form>
</main>