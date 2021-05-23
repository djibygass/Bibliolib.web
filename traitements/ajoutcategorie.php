<?php
session_start();
require_once "../modeles/Books.php";
$books = new Books();
if(isset($_POST['nom_cat']) && !empty($_POST['nom_cat'])){

  $categorie = $_POST['nom_cat'];
  $res = $books->checkthiscat($categorie);
  if($res){ 
    header("location:../espaceadmin.php?successaddcat=0");
  }
  else{
    $books->addCat($categorie);
    header('location:../espaceadmin.php?successaddcat=1');
  }

}else{
  header("location:../espaceadmin.php?successaddcat=2");
}

?>