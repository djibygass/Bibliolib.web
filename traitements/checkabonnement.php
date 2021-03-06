<?php
require_once "../modeles/Books.php";

$books = new Books();
$name = $_POST["word"];
$data = $books->searchBooks($name);

echo json_encode($data);