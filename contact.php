<?php
include 'nav_bar.php';
?>
<div class="container">
 <div class="c-wrapper">
    <div class="icon-c-wrapper">
    <i class="fas fa-envelope-open"></i>
    <p class='text'>@support</p>
    </div>

    <div class='form-c-wrapper'>
          <?php
           if (isset($_GET['ERREUR'])){
          ?>
             <div class="alert alert-danger" role="alert">
               Merci de compléter correctement tous les champs !
             </div>
             <?php
               }
           
           if (isset($_GET['VALID'])){
          ?>
             <div class="alert alert-success" role="alert">
              <i class="far fa-paper-plane"></i>
             </div>
             <?php
               }
             ?>
    <form  method='POST' action='./traitements/sendingform.php'>
          <div class="form-group">
            <input type="text" class="form-control"  placeholder="Prénom" name='prenom' required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  placeholder="Nom" name='nom' required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  placeholder="Email" name='email' required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  placeholder="Sujet" name='sujet' required>
          </div>
          <div class="form-group">
           <textarea class="form-control"        placeholder="Message" rows="4" name="message"></textarea>
          </div>
          <div>
          <button type="submit" class="btn btn-transparent">Envoyer</button>
          </div>
        </form>
    </div>
  </div>
</div><!-- // End #container -->






<script>
  const divAlt = document.querySelector('.alert.alert-success')
  const icon = document.querySelector('.icon-c-wrapper')
  if (divAlt){
    icon.innerHTML = '<i class="fas fa-envelope"></i>'
  }
</script>
<?php
include('closenav.php');
?>