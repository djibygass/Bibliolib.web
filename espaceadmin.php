<?php
include ('traitements/connectbdd.php');
session_start();
include('nav_bar3.php');
if(!$_SESSION['motdepasse']){
  header('location:admin.php');
}
?>
<a href="#" id="upPage"><i class="fas fa-arrow-alt-circle-up"></i></a>
<div class='container'>
  <ul>
    <li>Valider un emprunt</li>
    <li>vendre</li>
    <li>Inscrire un client</li>
    <li>faire une Commande</li>
  </ul>
</div>



         



<?php
include('closenav.php');
?>