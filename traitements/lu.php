<?php
session_start();
require_once('../modeles/Users.php');
$users = new Users();
$idClient = $_GET['Client'];
$users->read($idClient);
header('location:../espacemembre.php');
?>