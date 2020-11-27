<?php
include ('connectbdd.php');

if(isset($_POST['categorie']) && !empty($_POST['categorie'])){

  $categorie = $_POST['categorie'];

  $req = "SELECT nom FROM categories_livres WHERE nom = ?";
  $resultat = $bdd->prepare($req);
  $resultat->execute([$categorie]);
  $resultat = $resultat->fetchAll();

  if(sizeof($resultat) > 0){
    header("location:../espaceadmin.php?ERREUR6=TRUE#5");
  }
  else{
    $req = "INSERT INTO categories_livres(nom)
    VALUES (?)";
  $stmt = $bdd -> prepare($req);
  $stmt->execute([$categorie]);
  header('location:../espaceadmin.php#5');
  }


}else{
  header("location:../espaceadmin.php?ERREUR7=TRUE#5");
}






?>