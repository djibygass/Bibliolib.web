<?php
session_start();
include('nav_bar1.php');
require_once("modeles/Books.php");
$books = new Books();


// if isset(get(search)) -> $search else ''->$search
$search = $_GET['search'] ?? '';
//SEARCHING 
if($search){
    $AllBooks=$books->searchABook($search);
    //var_dump($AllBooks);
}else{
    $AllBooks=$books->retrieveAllBooks();
}
?>

<div class="search-panel-wrapper">
    <div class="search-panel">
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Rechercher" name="search" value="<?= $search?>">
                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
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
                    <div class="desc" >
                    <h5 class="post-tittle" title="titre du livre"><?=$data["titre"]?></h5>
                    <p title="description"><?=$data["description"]?></p> 
                    </div>
                    <a href="buyabook.php?id=<?=$data["id_livres"]?>"><button class="btn btn-transparent "><span class='black'>Acheter</span></button></a><span class="price"><?=$data["prix"]?> €</span>
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