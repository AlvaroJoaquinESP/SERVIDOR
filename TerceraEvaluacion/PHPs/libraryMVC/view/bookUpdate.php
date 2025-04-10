<main class="main">

    <form action="<?= BASE_URL ?>/book/update" method="post" class="form">
        <label for="title" class="form-label">Title</label>
        <select name="select" id="select" class="form-control">
            <?php
            foreach ($books as $value) {
                echo "<option value='". $value->getId(). "'>" .$value->getTitle(). "</option>";
            }
            ?>
        </select>
        <br>
        <label for="pages" class="form-label">Pages</label>
        <input type="number" name="pages" id="pages" class="form-control" maxlength="11" required>
        <br>
        <button class="btn btn-info">Update Book</button>
    </form>

</main>