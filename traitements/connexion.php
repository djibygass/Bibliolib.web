<?php
session_start();
include ('connectbdd.php');

if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['motdepasse']) && !empty($_POST['motdepasse'])){
  
  $login = $_POST['login'];
  $password = $_POST['motdepasse'];

  $req = " SELECT * FROM clients WHERE login =?";
  $stmt = getBdd() -> prepare($req);
  $stmt ->execute([$login]);
  $data = $stmt->fetch();
    if(password_verify($password,$data['mdp'])){
      $_SESSION["login"] = $login;
      $_SESSION['idClient'] = $data['id_clients'];
      header('location:../espacemembre.php');
    }
    else{
      header("location:../connexion.php?Erreur=TRUE");
    }
}
?>