<?php
include ('../connectbdd.php');

if(isset($_POST['motdepasse']) && !empty($_POST['motdepasse']) && 
   
    isset($_POST['login']) && !empty($_POST['login'])){
      
      $login = $_POST['login'];
      $password=$_POST['motdepasse'];
      

    
      
          $password = password_hash($password, PASSWORD_BCRYPT);
          $req = "INSERT INTO admin_site(login,mdp) VALUES (?,?)";
          $stmt = getBdd() -> prepare($req);
          $stmt->execute([$login,$password]);
          header('location:../test.php#3');
     
}
else{
      header('location:../test.php?ERREUR1=TRUE#3');
}
?>