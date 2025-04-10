<main class="main">
    <h1 class="text text-center">Editing Book</h1>
    <form action="<?= BASE_URL ?>/book/edit" method="post" class="form">
        <label for="id" class="form-label">id</label>
        <input type="text" name="id" id="id" class="form-control" readonly value="<?= $book[0] ?>"> 
        <br>

        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" readonly value="<?= $book['title'] ?>">
        <br>

        <label for="author" class="form-label">Author</label>
        <input type="text" name="author" id="author" class="form-control" maxlength="255" required value="<?= $book['author']  ?>">
        <br>

        <label for="year" class="form-label">Year</label>
        <input type="number" name="year" id="year" class="form-control" readonly value="<?= $book['year'] ?>">
        <br>

        <label for="pages" class="form-label">Pages</label>
        <input type="number" name="pages" id="pages" class="form-control" maxlength="11" required value="<?php echo $book['pages'] ?>">
        <br>
        <button class="btn btn-info">Edit Book</button>

    </form>

</main>