<?php
session_start();
if(isset($_GET['id'])){
   $idLivres = $_GET['id'];
   require_once("modeles/Books.php");
   include ("./nav_bar4.php");
   $books = new Books();
   $book = $books->showABook($idLivres);
   ?>
   <div class="es-wrapper">
      <div class="es-wrapper-l">
         <div class="card mb-3" style="max-width: 1040px;">
            <div class="row g-0">
               <div class="col-md-4">
                  <img src="./img/<?=$book['photo']?>" alt="...">
               </div>
               <div class="col-md-8">
                  <div class="card-body">
                  <div><h5 class="card-title"><?=$book['titre'];?></h5></div>
                  <div><p class="card-text"><?=$book['description']?></p></div>
                  <div><p class="card-text"><small class="text-muted"> <?=$book['A_nom']?></small></p></div> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="es-wrapper-r">
         <div class='es-wrapper-r-content'>
            <form method='POST' action = 'traitements/achat.php'>
            <div class="form-group">
               <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom" name='nom'>
            </div>
            <div class="form-group">
               <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Prénom" name='prenom'>
            </div>
            <div class="form-group">
               <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="email" name='email'>
            </div>
            <div class="form-group">
               <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Adresse de Livraison" name='adresse'>
            </div>
            <div class="form-group">
               <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Paiement" name='paiement'>
            </div>
            <div class="form-group">
               <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="CVV" name='cvv'>
            </div>
            <div>
            <button type="submit" class="btn btn-transparent">Valider</button>
            </div>
            </form>
         </div>
      </div>
   </div>
   <?php
}
else{
   header('./librairie.php');
}

?>