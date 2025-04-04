<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"> <!--enctype ya que voy a mandar un fichero --> 
        <label for="file"></label>
        <input type="file" name="file" id="file">
        <button>Enviar</button>
    </form>

    <?php
    if (isset($_SERVER['REQUEST_METHOD']) == "POST") {
        $file = $_FILES['file'];
        $contenido = file_get_contents($file['tmp_name']); // tmp_name para recuperar el fichero
        $numeros = explode(",",$contenido);
        echo max($numeros);
    }


    ?>

</body>
</html>