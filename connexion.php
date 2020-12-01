<?php
include('nav_bar.php');
?>
<section>
  <div class='content'>
  <h2 class='title'>CONNEXION</h2>
  </div>
  <div class='container'>
   <div>
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
      </form>
    </div>
  </div>
</section>






<?php
include('closenav.php');
?>