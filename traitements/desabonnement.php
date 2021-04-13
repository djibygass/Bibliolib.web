<?php
session_start();
include ('../modeles/Users.php');

$id = $_SESSION['idClient'];
$users = new Users();
$users->unsubscribtion($id);
header('location:../abonnement.php');

?>