<?php
session_start();
require_once('../modeles/Admins.php');
$admin = new Admins();
if(isset($_POST['message']) && !empty($_POST['message'])){
        
   $message = $_POST['message'];
   $idsender=$_SESSION['idadmin'];
   $idrecipient=$_SESSION['idctc'];
   $admin->sendMsg($idsender,$idrecipient,$message);
   header('location:../inbox.php?idctc='.$idrecipient);
}
else{
      header("location:../inbox.php?err=true");
}

?>
