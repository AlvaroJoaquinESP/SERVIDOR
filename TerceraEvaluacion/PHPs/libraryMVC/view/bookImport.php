<main class="main">

    <form action="<?= BASE_URL ?>/book/import" method="post" class="form">
        <label for="title" class="form-label">Introduce pages, author, year and title</label>
        <br>
        <textarea maxlength="1000" rows="5" cols="50" class="textarea-accordion" required></textarea>
        <br>
        <button class="btn btn-info">Import Books</button>
    </form>

</main>