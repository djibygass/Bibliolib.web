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