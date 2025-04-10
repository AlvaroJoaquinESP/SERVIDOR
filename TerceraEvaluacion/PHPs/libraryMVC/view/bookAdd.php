<main class="main">
    <?php
    if (!empty($message)) {
        echo "<p class='alert alert-secondary'>$message</p>";
    }
    ?>
    <form action="<?= BASE_URL ?>/book/add" method="post" class="form">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" maxlength="255" required>
        <br>

        <label for="author" class="form-label">Author</label>
        <input type="text" name="author" id="author" class="form-control" maxlength="255" required>
        <br>

        <label for="year" class="form-label">Year</label>
        <input type="number" name="year" id="year" class="form-control" maxlength="11" required>
        <br>

        <label for="pages" class="form-label">Pages</label>
        <input type="number" name="pages" id="pages" class="form-control" maxlength="11" required>
        <br>
        <button class="btn btn-info">Add Book</button>
    </form>

</main>