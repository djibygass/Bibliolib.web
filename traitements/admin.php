<?php
session_start();
require_once "../modeles/Admins.php";
$admin = new Admins();

if (isset($_POST['motdepasse']) && !empty($_POST['motdepasse']) && isset($_POST['login']) && !empty($_POST['login'])){
  
    $password = $_POST['motdepasse'];
    $login = $_POST['login'];

    $data = $admin->checkThisAdmin($login);

      if(password_verify($password, $data['password'])){
        $_SESSION["LoginAdmin"] = $login;
        header('location:../espaceadmin.php');
      }
      else{
        header("location:../admin.php?ERREUR=TRUE");
  } 
}
?>