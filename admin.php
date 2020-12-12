<?php
include('nav_bar.php');
?>
<section>

  <div class='container'>
   <div class='c-wrapper'>
   <div class="icon-c-wrapper"><img src="./img/logo.png" alt="logo"></div>
   <div class="form-c-wrapper">
   <i class="fas fa-tools"></i>
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
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="key" name='login'>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name='motdepasse'>
        </div>
        <div>
        <button type="submit" class="btn btn-transparent">Valider</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</section>
<?php
include('closenav.php');
?>