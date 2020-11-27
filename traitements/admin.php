<?php
session_start();
include ('connectbdd.php');

if (isset($_POST['motdepasse']) && !empty($_POST['motdepasse']) && isset($_POST['login']) && !empty($_POST['login'])){
  
  $password = $_POST['motdepasse'];
  $login = $_POST['login'];

  $req = "SELECT * FROM admin WHERE login = ?";
  $stmt = getBdd()-> prepare($req);
  $stmt ->execute([$login]);
  $data = $stmt->fetch();

    if(password_verify($password, $data['mdp'])){
      $_SESSION["motdepasse"] = $password;
      header('location:../espaceadmin.php');
    }
    else{
      header("location:../admin.php?ERREUR=TRUE");

} 
}
?>