<?php
session_start();
include('nav_bar2.php');
require_once "./modeles/Books.php";
require_once "./modeles/Users.php";
$books = new Books();
$users = new Users();
$adresses = $users->ShowAdresses();
//var_dump($_SESSION['noconnection']);

// if he's not connect
if(!isset($_SESSION['login'])){
  // if he's trying to borrow a book
  if(isset($_GET['idemprunt'])){
    //$_SESSION['noconnection'] take the book's id (idemprunt) if he's trying to borrow it being offline( not connected)
    $_SESSION['noconnection'] = $_GET['idemprunt'];
    header('location:connexion.php');
  }
  header('location:connexion.php');
}
//borrowing
if(isset($_GET['idemprunt']) || isset($_SESSION['noconnection'])){
  $idClients = $_SESSION['idClient'];
  $idLivres = $_GET['idemprunt'] ?? $_SESSION['noconnection'];
  $rest=$books->checkInBorrowedBook($idClients,$idLivres);
  //var_dump($rest[0]['COUNT(*)']);
  unset($_GET['idemprunt']);
  unset($_SESSION['noconnection']);
  //verrifying that the book he's trying to borrow is not already in he's bag
  if ($rest[0]['COUNT(*)'] == '1'){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Vous aviez déja emprunter ce livre</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    <?php
  }
  else{
    $books->borrowABook($idClients,$idLivres);
    ?>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Vous avez emprunter un nouveau livre</h4>
      <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
  }
}

if(isset($_GET['idrendre'])){
  
    $idLivres = $_GET['idrendre'];
  $books->returnABook($idLivres);
  unset($_GET['idrendre']);
  $count++;
  ?>
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Vous avez bien Rendu le livre</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  
 
  header('Location:espacemembre.php');
  
}

$dt = $books->borrowedBooks($_SESSION['idClient']);
?>

<div class="es-wrapper">
    <div class="list-group" id="list-tab" role="tablist">
       
      <div class="es-wrapper-r">
        <div class='es-wrapper-r-content'>
          <p>
              <a class="btn" data-bs-toggle="collapse" href="#collapseExample1"  aria-expanded="false" aria-controls="collapseExample1">
                Info pratiques
              </a>
            </p>
          <div class="collapse" id="collapseExample1">
            <div class="card card-body">

               <a class="list-group-item list-group-item" id="list-bib-list" data-bs-toggle="list" href="#list-bib" role="tab" aria-controls="bib">La liste des bibliothèques</a> 
          
               <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list" href="#horaires" role="tab" aria-controls="home">Les horaires d'ouverture</a> 
              <a href=""></a>
              <a href=""></a>
            </div>
          </div>

          <p>
              <a class="btn" data-bs-toggle="collapse" href="#collapseExample2"  aria-expanded="false" aria-controls="collapseExample2">
                F.A.Q
              </a>
            </p>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
               <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="index.php" role="tab" aria-controls="home">Déclarer une Perte</a> 
               <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="index.php" role="tab" aria-controls="home">Poser des Questions</a> 
              <a href=""></a>
              <a href=""></a>
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
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Carte</a>
              <a href="">Réseaux sociaux et blogs</a>
              
              </div>
            </div>
          

            <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Les livres Empruntés</a>
          </div>
        </div>

    </div>
  </div>
  <div class="es-wrapper-l">
    <div class="tab-content" id="nav-tabContent">
    
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
       <h3>bienvenue dans votre espace membre<h3>
      </div>

      <div class="tab-pane fade" id="list-bib" role="tabpanel" aria-labelledby="list-bib-list">
        <div>
          <h4 class = "titre-biblio">Notre réseau de bibliothèques</h4>
          <ul class = "list-bibliotheque">
          <?php
          foreach($adresses as $adress){
            ?>
        <li class = "list-adresses"><?=$adress['numero'].' '.$adress['rue'].' '.$adress['ville'].' '.$adress['codepostal']?></li>
        <?php
          }
          ?>
        </div>
      </div>
      <div class="tab-pane fade" id="horaires" role="tabpanel" aria-labelledby="list-bib-list">
        <div>
          <h4 class = "horaire">Les horaires d'ouverture</h4><br>
          <div class = "jours">
        Lundi : 10h - 19h<br>
        Mardi : 10h - 19h<br>
        Mercredi : 10h - 19h<br>
        Jeudi : 10h - 19h<br>
        Vendredi : 10h - 19h<br>
        Samedi : 09h - 18h<br>
        Dimanche : 9h - 13h<br>

          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./img/logo.png" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?=$_SESSION['login']?></h5>
              <p class="card-text">statut abonnement vert - rouge</p>
              <p class="card-text"><small class="text-muted">id abonnement [a-z][A-Z][1-9]</small></p>
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
            </div>
          </div>
        </div>
    </div>

      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
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
              <a href="espacemembre.php?idrendre=<?=$data["id_livres"]?>"><button class="btn btn-transparent "><span class='black'>Rendre</span></button></a>
              
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div>







<?php
include('closenav.php');
?>