<?php
session_start();

if(!$_SESSION['login']){
  header('location:connexion.php');
}else{
  require_once("../modeles/Books.php");
  $idClients = $_SESSION['idClients'];
  $idLivres = $_GET['id'];
  $book = new Books();
  $book->borrowABook($idClients,$idLivres);
  header('location:../espacemembre.php');
}
?>