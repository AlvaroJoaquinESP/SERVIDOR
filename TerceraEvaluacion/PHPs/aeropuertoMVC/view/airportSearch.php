<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>· Iberia SL ·</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container form-control m-3 bg-ligth">
        <h1>Búsqueda de Aeropuertos</h1>
        <hr>
        <form action="<?= BASE_URL ?> /airport/search" method="post">
            <label for="location" class="form-label">Buscar: </label>
            <input type="text" name="location" id="location" maxlength="255" class="form-control">
            <br>
            <button class="btn btn-primary">Buscar</button>
        </form>
    </div>
</body>

</html>