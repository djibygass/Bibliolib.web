<?php
session_start();
require_once('../modeles/Admins.php');
$admin = new Admins();

if(isset($_POST['email']) && !empty($_POST['email']) && 
    isset($_POST['contenu']) && !empty($_POST['contenu']) && isset($_POST['reponse']) && !empty($_POST['reponse'])){

      $email = $_POST['email'];
      $contenu = $_POST['contenu'];
      $reponse = $_POST['reponse'];

      if(filter_var($email,FILTER_VALIDATE_EMAIL)){
         $admin->afterRespond($reponse,$email,$contenu);
         header('location:../espaceadmin.php?successrsp=1');
      }else{
         header('location:../espaceadmin.php?successrsp=0');
      }

}
else{
header("location:../espaceadmin.php?successrsp=2");
}

?>
