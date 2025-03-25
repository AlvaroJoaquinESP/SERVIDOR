<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_REQUEST["favColor"];
    setcookie("color",$color);
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Color</title>
    <style>
        body{
            background-color: <?php echo $color;?>;
        }
    </style>
</head>
<body>
    <h1>Authorize cookies</h1>
    <form method="POST">
        <p>Please select a color for the page:</p>

        <input type="radio" name="favColor" id="red" value="Red">
        <label for="red">Red</label><br>

        <input type="radio" name="favColor" id="yellow" value="Yellow">
        <label for="yellow">Yellow</label><br>
        
        <input type="radio" name="favColor" id="green" value="Green">
        <label for="green">Green</label><br>
        
        <input type="radio" name="favColor" id="purple" value="Purple">
        <label for="purple">Purple</label><br><hr>

        <input type="submit" value="Submit">
    </form>
</body>
</html>