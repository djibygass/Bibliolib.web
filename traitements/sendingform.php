<?php
require_once('../modeles/Customers.php');
$customer = new Customers();
if(isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['sujet']) && !empty($_POST['sujet']) && 
    isset($_POST['message']) && !empty($_POST['message']) &&
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['prenom']) && !empty($_POST['prenom'])){
        
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

     

              
              $customer->sendMessage($prenom,$nom,$email,$sujet,$message);
              header('location:../contact.php?VALID=TRUE');

    }
    else{
      header("location:../contact.php?ERREUR=TRUE");
    }

?>
