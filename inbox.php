<?php
session_start();
include('nav_bar5.php');
if(!$_SESSION['LoginAdmin']){
  header('location:admin.php');
}
require_once("modeles/Admins.php");
$admin = new Admins();
$contacts = $admin->ShowAdmins($_SESSION['LoginAdmin']);
?>
<div class="box-container">
  <div class="box-wrapper-r">
      <form>
      <div class="card border-dark mb-4" style="max-width: 50rem;">
        <div class="card-header"></div>
        <div class="card-body text-dark">
          
          
        </div>
      </div>
        <div class="input-group">
          <textarea class="form-control" aria-label="With textarea"></textarea>
          <button type="submit" class="input-group-text"><i class="far fa-paper-plane"></i></button>
        </div>
      </form>
  </div>
  <div class="box-wrapper-l">
    <div>
      <div class="search-panel">
            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Rechercher" name="search" value="">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="contact-list-container">
            <div class="contact-list" >
                <?php
                foreach($contacts as $contact){
                ?>
                <div class="contact" data-nom = "<?=$contact['login']?>">
                  <span><?=$contact['login']?></span>
                </div>
              <?php
                }
              ?>
            </div>
        </div>
      </div>
  </div>
</div>
<script>
  var contacts = document.querySelectorAll('.contact');
  contacts.forEach((contact) => {
    contact.addEventListener('click', function(){
      document.querySelector(".card-header").innerHTML = `<span class="badge badge-secondary">${contact.dataset.nom}</span>`
    });
  });
</script>
<?php
include('closenav.php');
?>