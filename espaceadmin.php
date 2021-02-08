<?php
session_start();
include('nav_bar3.php');
if(!$_SESSION['motdepasse']){
  header('location:admin.php');
}
?>


<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="index.php" role="tab" aria-controls="home">vendre</a> <!-- liste vente à valider. -->
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Collect et emprunt</a>  <!-- list of commande + button valider( il a pris or on lui à livrer) -->
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Inscrire un client</a><!-- inscription en boutique -->
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="settings">faire une Commande de livre</a> <!-- commander un livre qu'on a pas et qu'un clients voudrait lire.. -->
      <a class="list-group-item list-group-item-action" id="list-q-list" data-bs-toggle="list" href="#list-q" role="tab" aria-controls="q">Questions USERS</a>
    </div>
  </div>
  <div class="container">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        yoooooo
      </div>
      
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">boom</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
      <div class="tab-pane fade" id="list-q" role="tabpanel" aria-labelledby="list-settings-list">questions users</div>
    </div>
  </div>
</div>

         



<?php
include('closenav.php');
?>