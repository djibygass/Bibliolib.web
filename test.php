<?php
require_once "modeles/Books.php";

$Allbooks = new Books();
print_r($Allbooks->retrieveAllBooks());

?>