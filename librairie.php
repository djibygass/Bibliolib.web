<?php
session_start();
include('nav_bar1.php');
// if(!$_SESSION['login']){
//     header('location:connexion.php');
// }else{
    require_once("modeles/Books.php");
    $books = new Books();
//}

if(isset($_GET['id'])){
    $idClients = $_SESSION['idClient'];
    $idLivres = $_GET['id'];
    $books->borrowABook($idClients,$idLivres);
    header('location:espacemembre.php');
}

$AllBooks=$books->retrieveAllBooks();
?>

<div class="search-panel-wrapper">
    <div class="search-panel">
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
                <div class="dropdown">
                    <div id="dLabel" type="button" class='info-book' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-caret-down"></i>
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dLabel">
                    <?=$data["description"]?>
                    </div>
                </div>
          
                <a href="espacemembre.php?id=<?=$data["id_livres"]?>"><button class="btn btn-transparent ">Acheter</button></a>

                </div>
            </div>
        </div>
            <?php
                }
            ?>
    


</div>







































<!-- 
<script>
const description = document.querySelector('.info-book')
const desc = document.querySelector('.post-intro')

description.innerHTML='<i class="fas fa-caret-down"></i>'
// description.addEventListener('click',showDesc)

// function showDesc(e){
//     description.innerHTML='<i class="fas fa-caret-up"></i>'
//     desc.style.fontSize = '50px'
//}
//$('.info-book').on('show.bs.dropdown', function () {
    description.innerHTML='<i class="fas fa-caret-up"></i>'
    desc.style.fontSize = '50px'
//})
</script> -->
<?php
include('closenav.php');
?>