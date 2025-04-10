<main class="main">

    <form action="<?= BASE_URL ?>/book/search" method="post" class="form">

        <label for="author" class="form-label">Introduce one Author</label>
        <input type="text" name="author" id="author" class="form-control" maxlength="255" required>
        <br>

        <button class="btn btn-info">Search by Author</button>
    </form>

</main>