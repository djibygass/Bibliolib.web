<?php
session_start();
include('nav_bar1.php');
require_once("modeles/Books.php");
$books = new Books();
$AllBooks=$books->retrieveAllBooks();


?>

<div class="search-panel-wrapper">
    <div class="search-panel">
        <form action="traitements/search.php" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Rechercher un titre" name="word"  oninput="se(this.value)">
            </div>
        </form>
   
    </div>
  
</div>


<div class="post-wrapper">

     
     
     <?php
        foreach($AllBooks as $data){
            
        ?>              
    
        <div class="post">
            <img class="thumbnail" src="img/<?=$data["photo"]?>" alt="">
            <div class="post-preview">
                <div class="desc" >
                <h5 class="post-tittle" title="titre du livre"><?=$data["titre"]?></h5>
                <p title="description"><?=$data["description"]?></p> 
                </div>
                <a href="espacemembre.php?idemprunt=<?=$data["id_livres"]?>"><button class="btn btn-transparent "><span class='black'>Emprunter</span></button></a>
            </div>
        </div>
    
        <?php
            }
            ?>
    


</div>







<script type="text/javascript" src="./js/search.js"></script>
<?php
include('closenav.php');
?>





