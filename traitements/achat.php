<?php
require_once('../modeles/Users.php');
$customer = new Customers();
if(isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['prenom']) && !empty($_POST['prenom']) && 
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['adresse']) && !empty($_POST['adresse']) &&
    isset($_POST['paiement']) && !empty($_POST['paiement'])  &&
    isset($_POST['cvv']) && !empty($_POST['cvv'])){
        
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $paiement = $_POST['paiement'];
    $cvv = $_POST['cvv'];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("location:../inscription.php?ERREUR1=TRUE");
         }//else{
        //   if(sizeof($customer->checkThisUser($login)) > 0){
        //     header("location:../inscription.php?ERREUR2=TRUE");
        //   }else{

        //       $password = password_hash($password, PASSWORD_BCRYPT);
        //       $customer->registerThisCustomer($nom,$prenom,$login,$password);
        
        //       header('location:../connexion.php');

        //   }

      
        
    }else{
      header("location:../buyabook.php?ERREUR3=TRUE");
    }

?>