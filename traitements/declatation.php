<?php
session_start();
require_once("../modeles/Users.php");
$user = new Users();
if(isset($_POST['livre']) && !empty($_POST['livre'])){
  if (isset($_POST['cause']) && !empty($_POST['cause'])){
    
      $causes = $_POST['cause'];
      $idLivres = $_POST['livre'];
      $idClients = $_SESSION['idClient'];
      $user->declare($idClients, $idLivres,$causes);
      
      header("location:../espacemembre.php?successdec=1");
    }
      else{
        header("location:../espacemembre.php?successdec=0");
    } 
  }
  else{
    header("location:../espacemembre.php?successdec=2");
} 
?>  