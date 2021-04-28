<?php
session_start();
require_once "modeles/Books.php";
require_once "modeles/Admins.php";
include('nav_bar3.php');
if(!$_SESSION['LoginAdmin']){
  header('location:admin.php');
}
$Books = new Books();
$AllBooks = $Books->AllBooks();
$admin = new Admins();
$collects = $admin->tobecollected();
$collectsAchats = $admin->bbtobecollected();
$questions = $admin->Questions();
$mailsSupports = $admin->mailsSupport();
//succes/echec de la vente
if(isset($_GET['successvente'])){
  if($_GET['successvente'] == 1){
    ?>
    <div class="alert alert-success" role="alert">
     <div>
       Livre vendu avec succes !
     </div>
     <div>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
     </div>
   </div>
    <?php
  }
  elseif($_GET['successvente'] == 0){
    ?>
    <div class="alert alert-danger" role="alert">
     <div>
       Echec de la vente !
     </div>
     <div>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
     </div>
   </div>
    <?php
  }
}
//succes collect
if(isset($_GET['successcollect'])){
  ?>
  <div class="alert alert-success" role="alert">
  <div>
    Livre collecter avec succes !
  </div>
  <div>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
  </div>
</div>
<?php
}
//success delete mail

if(isset($_GET['successdel'])){
  ?>
  <div class="alert alert-success" role="alert">
  <div>
    Mail supprimer avec succes !
  </div>
  <div>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
  </div>
</div>
<?php
}

//succes/echec de la commande
if(isset($_GET['successvente'])){
  if($_GET['successvente'] == 1){
    ?>
    <div class="alert alert-success" role="alert">
     <div>
       Livre vendu avec succes !
     </div>
     <div>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
     </div>
   </div>
    <?php
  }
  elseif($_GET['successvente'] == 0){
    ?>
    <div class="alert alert-danger" role="alert">
     <div>
       Echec de la vente !
     </div>
     <div>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
     </div>
   </div>
    <?php
  }
}

//succes/echec d'envoi de la reponse
if(isset($_GET['successrsp'])){
  if($_GET['successrsp'] == 1){
    ?>
    <div class="alert alert-success" role="alert">
     <div>
       réponse envoyée avec succes !
     </div>
     <div>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
     </div>
   </div>
    <?php
  }
  elseif($_GET['successrsp'] == 0){
    ?>
    <div class="alert alert-danger" role="alert">
     <div>
       Adresse email invalide
     </div>
     <div>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
     </div>
   </div>
    <?php
  }
  elseif($_GET['successrsp'] == 2){
    ?>
    <div class="alert alert-danger" role="alert">
     <div>
       Veuillez à bien remplir tous les champs !
     </div>
     <div>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
     </div>
   </div>
    <?php
  }
}

?>

<div class="containerr">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <span class="Mcolor" >Vendre</span>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        <form method='POST' action='./traitements/vendre_en_magasin.php'>
            <div class="form-group">
              <select name='livre' id ='livre'>
              <?php
              foreach ($AllBooks as $book){
              ?>
                <option value="<?=$book['id_livres']?>"><?=$book['titre']?> --- <?=$book['prix']?>€</option>
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
        <span class="Mcolor">Collect et emprunt <span class="badge bg-secondary"><?=$admin->counttobecollected()[0]?></span></span>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">

              <?php
              foreach ($collects as $collect){
              ?>
              <div class="commandes">
                <div><?=$collect['titre']?></div> 
                <div>
                  <?=$collect['login']?> 
                   <a href="./traitements/collect.php?idl=<?=$collect['id_livres']?>&idC=<?=$collect['id_clients']?>"><button type="submit" class="btn btn-secondary">Collecter</button></a>
                </div>
              </div>
              <?php 
              }
              ?>
              
            </div>

        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <span class="Mcolor">Collect et achat <span class="badge bg-secondary"><?=$admin->countbbtobecollected()[0]?></span></span>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">

            <?php
            foreach ($collectsAchats as $collect){
            ?>
            <div class="commandes">
              <div><?=$collect['titre']?></div> 
              <div>
                <?=$collect['login']?> 
                <a href="./traitements/collectachat.php?idl=<?=$collect['id_livres']?>&idC=<?=$collect['id_clients']?>"><button type="submit" class="btn btn-secondary">Collecter</button></a>
              </div>
            </div>
            <?php 
            }
            ?>

        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <span class="Mcolor">faire une Commande de livre </span>
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        <form method='POST' action='./traitements/commande.php'>
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
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <span class="Mcolor">Questions USERS <span class="badge bg-secondary"><?=$admin->countQuestions()[0]?></span></span>
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body">
    
          <?php
              foreach ($questions as $question){
              ?>
              <div class="question">
                <div><span class="Mcolor"><?=$question['login']?></span></div> 
                <div>
                  <form action="./traitements/reponse.php" method="post">

                    <div class="form-group">
                      <input  class="form-control" name='email' value="<?=$question['email']?>">
                    </div>

                    <div class="form-group">
                    <label>question :</label>
                      <textarea class="form-control"  rows="4" name="contenu" required><?=$question['contenu']?></textarea>
                    </div>
                    
                    <div class="form-group">
                    <textarea class="form-control" placeholder="Reponse" rows="4" name="reponse" required></textarea>
                    </div>

                    <div>
                      <button type="submit" class="btn btn-secondary">Envoyer</button>
                    </div>
                  </form> 
                  <hr>
                </div>
              </div>
              <?php 
              }
              ?>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <span class="Mcolor">Contact support <span class="badge bg-secondary"><?=$admin->countmailsSupport()[0]?></span></span>
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        <?php
              foreach ($mailsSupports as $mailsSupport){
              ?>
              <div class="question">
                
                <div>
                  <div class="form-group">
                    <input  class="form-control" name='email' value="<?=$mailsSupport['email']?>">
                  </div>

                  <div class="form-group">
                  <label>sujet :</label>
                  <input  class="form-control" name='email' value="<?=$mailsSupport['sujet']?>">
                  </div>

                  <div class="form-group">
                  <label>question :</label>
                    <textarea class="form-control"  rows="4" name="contenu" required><?=$mailsSupport['contenu']?></textarea>
                  </div>
                  
                  <div>
                    <a href="./traitements/delmailafteranswer.php?idmail=<?=$mailsSupport['id']?>">
                    <button type="submit" class="btn btn-secondary">effacer</button></a>
                  </div>
                      
                  <hr>
                </div>
              </div>
              <?php 
              }
              ?>


        </div>
      </div>
    </div>
  </div>














            
            
           
   


<?php
include('closenav.php');
?>