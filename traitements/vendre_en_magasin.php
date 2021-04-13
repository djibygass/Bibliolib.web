<?php
session_start();
require_once("../modeles/Admins.php");
$admin = new Admins();
if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) && isset($_POST['cb']) && !empty($_POST['cb'])){
  
    $nom = $_POST['nom'];
    $idLivres = $_POST['livre'];
    $email = $_POST['email'];
    $admin->sellbook($idLivres,$nom,$email);
    // $message = "Bibliolib vous remercie pour votre achat";
    // mail("gassamadjibril@outlook.com","sujet",$message);
    header("location:../espaceadmin.php?successvente=1");
   }
    else{
      header("location:../espaceadmin.php?successvente=0");
  } 

?>  