<?php
session_start();
require_once "modeles/Books.php";
include('nav_bar3.php');
if(!$_SESSION['LoginAdmin']){
  header('location:admin.php');
}
$Books = new Books();
$AllBooks = $Books->AllBooks();
?>

<div class="containerr">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span>Vendre</span>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        <form method='POST' action=''>
            <div class="form-group">
              <select name='livre' id ='livre'>
              <?php
              foreach ($AllBooks as $book){
              ?>
                <option value="<?=$book['titre']?>"><?=$book['titre']?> --- <?=$book['prix']?>€</option>
              <?php 
              }
              ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Nom et Prénom du client" name='nom' required>
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Email" name='email' required>
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Paiement" name='cb' required>
            </div>

            <div>
            <button type="submit" class="btn btn-transparent">Valider</button>
            </div>
            <br>
          </form>

        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <span>Collect et emprunt</span>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        <form method='POST' action=''>
            <div class="form-group">
              <select name='livre' id ='livre'>
              <?php
              foreach ($AllBooks as $book){
              ?>
                <option value="<?=$book['titre']?>"><?=$book['titre']?> --- <?=$book['prix']?>€</option>
              <?php 
              }
              ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Nom et Prénom du client" name='nom' required>
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Email" name='email' required>
            </div>

            <div>
            <button type="submit" class="btn btn-transparent">Valider</button>
            </div>
            <br>
          </form>


        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <span>faire une Commande de livre </span>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        <form method='POST' action=''>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Titre du livre" name='titre' required>
            </div>

            <div>
              <button type="submit" class="btn btn-transparent">Valider</button>
            </div>
            <br>
          </form>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <span>Questions USERS </span>
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        <form method='POST' action=''>
            <div class="form-group">
              <select name='livre' id ='livre'>
              <?php
              foreach ($AllBooks as $book){
              ?>
                <option value="<?=$book['titre']?>"><?=$book['titre']?> --- <?=$book['prix']?>€</option>
              <?php 
              }
              ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Nom et Prénom du client" name='nom' required>
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Email" name='email' required>
            </div>

            <div>
            <button type="submit" class="btn btn-transparent">Valider</button>
            </div>
            <br>
          </form>


        </div>
      </div>
    </div>
  </div>

</div>












            
            
           
   


<?php
include('closenav.php');
?>