<?php
include_once "libro.php";

$book = new Book();

// $book->__toString();
$book->setTitle("Descubriendo Mula");
$book->setNumber_copies(5);
$book->setLoaned_books(3);

$book->loan();
$book->loan();
$book->loan();

?>

