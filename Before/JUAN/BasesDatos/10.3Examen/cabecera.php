<?php
session_start();

if (!isset($_SESSION['kk'])) {
    header("Location:index.php");
}


?>