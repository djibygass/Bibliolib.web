<?php
include ('../modeles/Users.php');
$users = new Users();

if(isset($_POST['iban']) && !empty($_POST['iban']) && 
    isset($_POST['bic']) && !empty($_POST['bic'])){
      
      $iban = $_POST['iban'];
      $bic=$_POST['bic'];
      $res = $users->Subscribtion($id,$iban,$bic);
      header('location:../abonnement.php');
}
else{
      header('location:../abonnement.php?ERREUR=TRUE');
}
?>