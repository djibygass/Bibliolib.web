<?php
session_start();
require_once('../modeles/Admins.php');
$admins = new Admins();
$idmail = $_GET['idmail'];
$admins->delMail($idmail);
header('location:../espaceadmin.php?successdel=1');
?>