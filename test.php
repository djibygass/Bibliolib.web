<?php
session_start();
include('nav_bar2.php');
require_once "./modeles/Books.php";
$books = new Books();
$dt = $books->borrowedBooks($_SESSION['idClient']);
?>

<div class="es-wrapper">
  <div class="es-wrapper-l">
    <div class="post-wrapper">

                      <?php
                      foreach($dt as $data){
                      ?>              
          <div>
              <div class="post">
                  <img class="thumbnail" src="img/<?=$data["photo"]?>" alt="">
                  <div class="post-preview">
                      <div class="desc" >
                      <h5 class="post-tittle" title="titre du livre"><?=$data["titre"]?></h5>
                      <p title="description"><?=$data["description"]?></p> 
                      </div>
                      <a href="espacemembre.php?id=<?=$data["id_livres"]?>"><button class="btn btn-transparent "><span class='black'>Rendre</span></button></a>
                  </div>
              </div>
          </div>
              <?php
                  }
              ?>
      


    </div>
  </div>

  <div class='es-wrapper-r'>
    <div class='es-wrapper-r-content'>
      <div>
          <p>
              <a class="btn" data-bs-toggle="collapse" href="#collapseExample1"  aria-expanded="false" aria-controls="collapseExample1">
                Info pratiques
              </a>
            </p>
          <div class="collapse" id="collapseExample1">
            <div class="card card-body">
              <a href="">La liste des bibliothèques</a>
              <a href="">Les horaires d'ouverture</a>
            </div>
          </div>
        </div>

        <div>
          <p>
              <a class="btn" data-bs-toggle="collapse" href="#collapseExample"  aria-expanded="false" aria-controls="collapseExample">
                Nos services
              </a>
            </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <a href="">cartes</a>
              <a href="">Réseaux sociaux et blogs</a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>






<script src="./js/showonclick.js"></script>

<?php
include('closenav.php');
?>

<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
       



      <div>
          <p>
              <a class="btn" data-bs-toggle="collapse" href="#collapseExample1"  aria-expanded="false" aria-controls="collapseExample1">
                Info pratiques
              </a>
            </p>
          <div class="collapse" id="collapseExample1">
            <div class="card card-body">
               <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="index.php" role="tab" aria-controls="home">La liste des bibliothèques</a> 
               <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="index.php" role="tab" aria-controls="home">Les horaires d'ouverture</a> 
              <a href=""></a>
              <a href=""></a>
            </div>
          </div>
        </div>

     
      
      <!-- liste vente à valider. -->
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Collect et emprunt</a>  <!-- list of commande + button valider( il a pris or on lui à livrer) -->
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Inscrire un client</a><!-- inscription en boutique -->
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="settings">faire une Commande de livre</a> <!-- commander un livre qu'on a pas et qu'un clients voudrait lire.. -->
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
    </div>
  </div>
</div>