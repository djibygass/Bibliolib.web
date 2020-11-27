<?php
include ('connectbdd.php');
   
$req = "DELETE FROM livres WHERE id_livres=?";
$stmt = $bdd -> prepare($req);
$stmt ->execute([$_GET['id']]);
header('location:../espaceadmin.php');
   

?>