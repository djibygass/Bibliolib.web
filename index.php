<?php
  include('nav_bar.php');
  require_once "./modeles/Posts.php";
  require_once "./modeles/Users.php";
  
  $post = new Posts();
  $users =new Users();
  $posts = $post->showAllPost();
  $adresses = $users->ShowAdresses();
?>
<div class="main-container flex">
  <div class='hour'> </div>
  <div class='container'>
    <div class="containerPres">
      <div class="pres"></div>
    </div>
  </div>
</div>
<div class="info-wrapper">
  <div class="l-column ">
    <h4 class='column-title'>Actualités</h4>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="./img/actu.jpg" class="d-block w-100" alt="...">
  </div>
    <?php
    foreach($posts as $pst){
    ?>
    <div class="carousel-item">
      <img src="<?=$pst['content']?>" class="d-block w-100" alt="..." >
    </div>
    <?php
    }
    ?>
    <!-- <div class="carousel-item">
      <img src="./img/1984.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/200rec.jpg" class="d-block w-100" alt="...">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
  </div>
  <div class="r-column">
    <h4 class='column-title '>Nos Adresses</h4>
    <p> <?php
          foreach($adresses as $adress){
            ?>
        <li class = "list-adresses"><?=$adress['numero'].' '.$adress['rue'].' '.$adress['ville'].' '.$adress['codepostal']?></li>
        <?php
          }
          ?></p> 
  </div>
</div>










<a class='linkbotright' title="Administrateur" href="admin.php">Je suis admin</a>
<script src='./js/app.js'></script>
<?php
include('closenav.php');
?>