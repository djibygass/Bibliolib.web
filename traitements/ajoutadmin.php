<?php
include ('connectbdd.php');

if(isset($_POST['motdepasse']) && !empty($_POST['motdepasse']) && 
    isset($_POST['motdepasseVerif']) && !empty($_POST['motdepasseVerif'])
    && 
    isset($_POST['login']) && !empty($_POST['login'])){
      
      $login = $_POST['login'];
      $password=$_POST['motdepasse'];
      $passwordVerify=$_POST['motdepasseVerif'];

      if($password != $passwordVerify){
        header('location:../espaceadmin.php?ERREUR=TRUE#3');
      }
      else{  
          $password = password_hash($password, PASSWORD_BCRYPT);
          $req = "INSERT INTO admin(login,mdp) VALUES (?,?)";
          $stmt = getBdd() -> prepare($req);
          $stmt->execute([$login,$password]);
          header('location:../espaceadmin.php#3');
      }
}
else{
      header('location:../espaceadmin.php?ERREUR1=TRUE#3');
}
?>