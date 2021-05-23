<?php
session_start();
require_once "../modeles/Books.php";
$books = new Books();
if(isset($_POST['nom']) && !empty($_POST['nom'])){

  $nom = $_POST['nom'];
  $res = $books->checkthisauth($nom);
  if($res){ 
    header("location:../espaceadmin.php?successaddauthor=0");
  }
  else{
    $books->addAuthor($nom);
    header('location:../espaceadmin.php?successaddauthor=1');
  }

}else{
  header("location:../espaceadmin.php?successaddauthor=2");
}

?>