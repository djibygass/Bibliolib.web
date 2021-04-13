<?php
session_start();
require_once "../modeles/Admins.php";
$admin = new Admins();
if(isset($_POST['titre']) && !empty($_POST['titre'])){
   $admin->order($_POST['titre']);
   header('location:../espaceadmin.php?successcommande=1');
}
else{
   header('location:../espaceadmin.php?successcommande=0');
}

?>
