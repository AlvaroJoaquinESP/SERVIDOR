<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>· Log In ·</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/styles/bootstrap.css">
</head>
<body>
    <div class="container mt-2">
    <form action="<?= BASE_URL ?>/user/validate" method="post" class="form">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" maxlength="255" required>
        <br>
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" maxlength="255" required>
        <br>
        <button class="btn btn-info">Access</button>
    </form>
    </div>
</body>
</html>