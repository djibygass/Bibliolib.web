<?php
session_start();
include('nav_bar2.php');
if(!$_SESSION['login']){
    header('location:connexion.php');
}else{
    require_once("modeles/Books.php");
    $books = new Books();
}

if(isset($_GET['id'])){
    $idClients = $_SESSION['idClient'];
    $idLivres = $_GET['id'];
    $books->borrowABook($idClients,$idLivres);
    header('location:espacemembre.php');
}

$AllBooks=$books->retrieveAllBooks();
?>

<div id="search-panel">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-chevron-circle-down"></i></span>
        </div>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
    </div>
</div>


<div class="post-wrapper">

                    <?php
                    foreach($AllBooks as $data){
                    ?>              
        <div>
            <div class="post">
                <img class="thumbnail" src="img/<?=$data["photo"]?>" alt="">
                <div class="post-preview">
                <h6 class="post-tittle"><?=$data["titre"]?></h6>
                <p class="post-intro"><?=$data["description"]?> </p>
                <div>quantités restantes : <?=$data["quantite"]?></div>
                <a href="espacemembre.php?id=<?=$data["id_livres"]?>"><button class="btn btn-transparent dropdown-toggle">Emprunter</button></a>
                </div>
            </div>
        </div>
            <?php
                }
            ?>
    


</div>









































<?php
include('closenav.php');
?>