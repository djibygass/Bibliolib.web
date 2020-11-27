<?php
include('nav_bar.php');
?>
<section>
  <div class='content'>
  <h2 class='title'>INSCRIPTION</h2>
  </div>
  <div class='container'>
   <div>
   <?php
        if (isset($_GET['ERREUR1'])){
       ?>
        <div class="alert alert-danger" role="alert">
          erreur de vérification de mot de passe !!
        </div>
        <?php
        }
        elseif (isset($_GET['ERREUR2'])){
          ?>
           <div class="alert alert-danger" role="alert">
             ces identifiants sont déja utilisés par un client !!
           </div>
           <?php
           }
           elseif (isset($_GET['ERREUR3'])){
            ?>
             <div class="alert alert-danger" role="alert">
               Merci de Compléter tous les champs !!!
             </div>
             <?php
             }
      ?>
          
      <form method='POST' action = 'traitements/inscription.php'>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom" name='nom'>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Prénom" name='prenom'>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Login" name='login'>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Mot de passe" name='motdepasse'>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Vérification" name='motdepasseVerif'>
        </div>
        <div>
        <button type="submit" class="btn btn-transparent">Valider</button>
        </div>
      </form>
    </div>
  </div>
</section>
<?php
include('closenav.php');
?>