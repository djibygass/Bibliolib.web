<?php
session_start();
require_once("../modeles/livres.php");
$idClients = $_SESSION['idClients'];
$idLivres = $_GET['id'];
emprunterLivre($idClients,$idLivres);
header('location:../espacemembre.php');
?>