<?php
include ('connectbdd.php');
   
$req = "DELETE FROM clients WHERE id_clients=?";
$stmt = $bdd -> prepare($req);
$stmt ->execute([$_GET['id']]);
header('location:../espaceadmin.php#2');
   

?>