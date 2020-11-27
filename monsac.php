<?php
session_start();
include('nav_bar2.php');
if(!$_SESSION['login']){
    header('location:connexion.php');
}else{
    require_once("modeles/Books.php");
    $books = new Books();
}
if (isset($_GET['idL'])){
    $books->returnABook($_GET['idL']);
    header('location:monsac.php');
}
$borrowed = $books->borrowedBooks($_SESSION['idClient']);
?>
<div class="post-wrapper">
                    <?php
                    foreach($borrowed as $data){
                    ?>  

        <div>
            <div class="post">
                <img class="thumbnail" src="img/<?=$data["photo"]?>" alt="">
                <div class="post-preview">
                <h6 class="post-tittle"><?=$data["titre"]?></h6>
                <p class="post-intro"><?=$data["description"]?></p>
                <a href="monsac.php?idL=<?=$data["id_livres"]?>"><button class="btn btn-transparent dropdown-toggle">rendre</button></a>
                </div>
            </div>
        </div>
            <?php
                }
            ?>














<?php
include('closenav.php');
?>