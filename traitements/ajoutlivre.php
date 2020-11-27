<?php
session_start();
include ('connectbdd.php');


if (isset($_POST['titre']) && !empty($_POST['titre']) &&
    isset($_POST['description']) && !empty($_POST['description']) && 
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['categorie']) && !empty($_POST['categorie']) &&
    isset($_POST['quantite']) && !empty($_POST['categorie']) &&
    !empty($_POST['photo'])){

      $titre=$_POST['titre'];
      $description=$_POST['description'];
      $idcategorie=$_SESSION['idcat'];
      $quantite=intval($_POST['quantite']);
      $photo=strval($_POST['photo']);
      $idauteur=$_SESSION['ida'];


      $req = "SELECT * FROM livres WHERE titre = ?";
      $resultat = $bdd->prepare($req);
      $resultat->execute([$titre]);
      $resultat = $resultat->fetchAll();

      if(sizeof($resultat) > 0){
        header("location:../espaceadmin.php?ERREUR2=TRUE#4");
      }
    
      else{
        $req = "INSERT INTO livres(titre, description, quantite, id_auteurs, id_catLivres,photo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $bdd -> prepare($req);
        $stmt->execute([$titre,$description,$quantite,$idauteur,$idcategorie,$photo]);
  
        header('location:../espaceadmin.php?#4');

      }
}
else{
    header("location:../espaceadmin.php?ERREUR3=TRUE#4");
}
?>