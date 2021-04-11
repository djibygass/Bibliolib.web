<?php
session_start();
require_once "../modeles/Books.php";
$books = new Books();
$idClients = $_GET["Client"];
$idLivres = $_GET["Livre"];
$books->updateachat($idClients,$idLivres);
header('location:../espacemembre.php');
?>