<?php
session_start();
require_once "../modeles/Users.php";
if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['motdepasse']) && !empty($_POST['motdepasse'])){
  
  $login = $_POST['login'];
  $password = $_POST['motdepasse'];

  $user = new Users();
  $data = $user->checkThisUser($login);
    if(password_verify($password,$data['mdp'])){
      $_SESSION["login"] = $login;
      $_SESSION['idClient'] = $data['id_clients'];
      header('location:../espacemembre.php');
    }
    else{
      header("location:../connexion.php?Erreur=TRUE");
    }
}
else{
  header("location:../connexion.php?Erreur=TRUE");
}

?>