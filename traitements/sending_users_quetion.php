<?php
session_start();
require_once('../modeles/Users.php');
$user = new Users();
if(isset($_POST['email']) && !empty($_POST['email']) && 
    isset($_POST['message']) && !empty($_POST['message'])){
      $email = $_POST['email'];
      $message = $_POST['message'];
      if(filter_var($email,FILTER_VALIDATE_EMAIL)){
         $user->sendMessage($_SESSION['idClient'],$email,$message);
         header('location:../espacemembre.php?successmsg=1');
      }else{
         header('location:../espacemembre.php?successmsg=0');
      }

}
else{
header("location:../espacemembre.php?successmsg=2");
}

?>
