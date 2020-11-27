<?php
require_once('../modeles/Customers.php');
$customer = new Customers();
if(isset($_POST['login']) && !empty($_POST['login']) &&
    isset($_POST['motdepasse']) && !empty($_POST['motdepasse']) && 
    isset($_POST['motdepasseVerif']) && !empty($_POST['motdepasseVerif']) &&
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['prenom']) && !empty($_POST['prenom'])){
        
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $password = $_POST['motdepasse'];
    $passwordVerify = $_POST['motdepasseVerif'];

        if($password != $passwordVerify){
          header("location:../inscription.php?ERREUR1=TRUE");
        }else{
          if(sizeof($customer->checkThisUser($login)) > 0){
            header("location:../inscription.php?ERREUR2=TRUE");
          }else{

              $password = password_hash($password, PASSWORD_BCRYPT);
              $customer->registerThisCustomer($nom,$prenom,$login,$password);
        
              header('location:../connexion.php');

          }

        }
        
    }else{
      header("location:../inscription.php?ERREUR3=TRUE");
    }

?>
