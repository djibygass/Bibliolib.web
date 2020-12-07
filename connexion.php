<?php
include('nav_bar.php');
?>
<section>

  
  <div class='container'>
    <div class="c-wrapper">
      <div class="icon-c-wrapper"><img src="./img/logo.png" alt="logo"></div>
      <div class='form-c-wrapper'>
       <i class="far fa-user"></i>
        <?php
        if (isset($_GET['Erreur'])){
          ?>
          <div class="alert alert-danger" role="alert">
            Login ou Mot de Passe incorrect !!
            </div>
        <?php
        
        }
        ?>
          
          <form method='POST' action='traitements/connexion.php'>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Login" name='login'>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Mot de passe" name='motdepasse'>
            </div>
            <div>
            <button type="submit" class="btn btn-transparent">Valider</button>
            </div>
            <br>
            <a href="inscription.php" class="link"><span >S'inscrire</span></a>
          </form>
        </div>
    </div>
  </div>
</section>






<?php
include('closenav.php');
?>