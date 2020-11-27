<?php
include('nav_bar.php');
?>
<section>
  <div class='content'>
  <h2 class='title'>CONNEXION ADMIN</h2>
  </div>
  <div class='container'>
   <div>
   <?php
     if (isset($_GET['ERREUR'])){
    ?>
     <div class="alert alert-danger" role="alert">
       ACCES REFUSE !!!
     </div>
     <?php
     }
    ?>
      <form method='POST' action='traitements/admin.php'>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="login ADMIN" name='login'>
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