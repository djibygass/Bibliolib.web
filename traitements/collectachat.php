<?php
session_start();
require_once "../modeles/Admins.php";
$admin = new Admins();
$idLivres = $_GET['idl'];
$idClients = $_GET['idC'];
$admin->afterCollectAchats($idLivres,$idClients);
header('location:../espaceadmin.php?successcollect=1');
?>