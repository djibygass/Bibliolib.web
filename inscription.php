<?php
include('nav_bar.php');
?>
<section>
  <div class='container'>
   <div class="c-wrapper">
      <div class="icon-c-wrapper"><img src="./img/logo.png" alt="logo">
    </div>
   <div class='form-c-wrapper' >
    <i class="fas fa-user-plus"></i>
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
          <input type="text" class="form-control"  placeholder="Nom" name='nom' required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control"  placeholder="Prénom" name='prenom' required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control"  placeholder="Login" name='login' required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control"  placeholder="Mot de passe" name='motdepasse' required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control"  placeholder="Vérification du mot de passe" name='motdepasseVerif' required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control"  placeholder="Adresse" name='adresse' required>
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