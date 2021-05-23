<?php
session_start();
include('nav_bar1.php');
require_once("modeles/Admins.php");
$admin = new Admins();
$annonces=$admin->ShowAllAnnouncement();
foreach($annonces as $annonce){
?>

<div class="card text-center" style="margin-top:1em;">
  <div class="card-header">
    Annonce
  </div>
  <div class="card">
    <h5 class="card-title"><?=$annonce['titre']?></h5>
    <p class="card-text"><?=$annonce['contenu']?></p>
  </div>
  <div class="card-footer text-muted">
      <?=$annonce['date_time']?>
  </div>
</div>

<?php
}
?>

