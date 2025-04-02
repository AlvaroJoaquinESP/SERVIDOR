<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>· Login ·</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container m-2">
        <h1>Log In</h1>
        <form action="<?= BASE_URL ?>/user/validate" method="post" class="form-control">
            <label for="name" class="form-label">User</label>
            <input type="text" name="name" id="name" class="form-control" maxlength="255" required>
            <br>
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" maxlength="255" required>
            <br>
            <button class="btn btn-primary">Log In</button>
        </form>
    </div>
</body>

</html>