<?php
session_start();

if(!$_SESSION['login']){
  header('location:connexion.php');
}else{
  require_once("../modeles/Books.php");
  require_once("../modeles/Users.php");
  $idClients = $_SESSION['idClients'];
  $user = new Users();
  $res=$user->checkAbonnement($idClients);
  if($res){
    $idLivres = $_GET['id'];
    $book = new Books();
    $book->borrowABook($idClients,$idLivres);
    header('location:../espacemembre.php');
  }
  else{
    header('location:../espacemembre.php?Erreur');
  }
}
?>