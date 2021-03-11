<?php
session_start();
include ('../modeles/Users.php');

if(isset($_POST['iban']) && !empty($_POST['iban']) && 
    isset($_POST['bic']) && !empty($_POST['bic'])){
          
      $id = $_SESSION['idClient'];
      $iban = $_POST['iban'];
      $bic=$_POST['bic'];
      $users = new Users();
      $res = $users->Subscribtion($id,$iban,$bic);
      header('location:../abonnement.php');
}
else{
      header('location:../abonnement.php?ERREUR=TRUE');
}
?>