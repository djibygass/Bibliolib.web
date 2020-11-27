<?php
include ('connectbdd.php');

if(isset($_POST['nom']) && !empty($_POST['nom'])){

  $nom = $_POST['nom'];
  $req = "SELECT nom FROM auteurs WHERE nom = ?";
  $resultat = $bdd->prepare($req);
  $resultat->execute([$nom]);
  $resultat = $resultat->fetchAll();

  if(sizeof($resultat) > 0){
    header("location:../espaceadmin.php?ERREUR4=TRUE#5");
  }
  else{
    $req = "INSERT INTO auteurs(nom)
    VALUES (?)";
  $stmt = $bdd -> prepare($req);
  $stmt->execute([$nom]);
  header('location:../espaceadmin.php#5');
  }


}else{
  header("location:../espaceadmin.php?ERREUR5=TRUE#5");
}






?>