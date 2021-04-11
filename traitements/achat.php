<?php
session_start();
require_once "../modeles/Books.php";
$books = new Books();
if(isset($_POST['paiement']) && !empty($_POST['paiement']) && isset($_POST['cvv']) && !empty($_POST['cvv'])){

   $books -> buyABook($_SESSION['idClient'],$_SESSION['idachat']);
   
   header("location:../espacemembre.php?success=".$_SESSION['idachat']."&".$_SESSION['idClient']);
}
else{
   header("location:../buyabook.php?idachat=".$_SESSION['idachat']."&erreur=true");
}
?>