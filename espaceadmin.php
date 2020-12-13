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
    <!-- list of commande + button valider( il a pris or on lui à livrer) -->
    <li>vendre</li> 
    <!-- liste vente à valider. -->
    <li>Inscrire un client</li>
    <!-- inscription en boutique -->
    <li>faire une Commande de livre</li>
    <!-- commander un livre qu'on a pas et qu'un clients voudrait lire.. -->
  </ul>
</div>


<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div>

         



<?php
include('closenav.php');
?>