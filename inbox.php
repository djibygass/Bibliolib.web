<?php
session_start();
include('nav_bar5.php');
if(!$_SESSION['LoginAdmin']){
  header('location:admin.php');
}
require_once("modeles/Admins.php");
$admin = new Admins();
$contacts = $admin->ShowAdmins($_SESSION['LoginAdmin']);


if(isset($_GET['err'])){
  ?>
    <div class="alert alert-danger" role="alert">
     <div>
       Echec de l'envoi du message
     </div>
     <div>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>  
     </div>
   </div>
    <?php
}



if(isset($_GET['idctc'])){
  $messages = $admin->showMessages($_SESSION['idadmin'],$_GET['idctc']);
  if(is_numeric($_GET['idctc'])){ 
    $_SESSION['idctc'] = $_GET['idctc'];
    $nomm = $admin->name($_GET['idctc']);
    $nom = $nomm[1];
  }
  else{
    $nom = " ";
  }
  ?>
  <div class ="nomAdmin">connecté en tant que : <?=$_SESSION['LoginAdmin']?></div> 
  <div class="box-container">
    <div class="box-wrapper-r">
        <form action="./traitements/sendMessage.php" method="POST">
        <div class="card border-dark mb-4" style="max-width: 50rem;">
          <div class="card-header"><span class="badge bg-secondary"><?=$nom?></span></div>
          <div class="card-body text-light">
         
          <?php
                  foreach($messages as $message){
                    if($message['id_sender']==$_SESSION['idadmin'] && $message['id_recipient'] == $_GET['idctc'] || $message['id_sender']==$_GET['idctc'] && $message['id_recipient'] == $_SESSION['idadmin']){
                      ?>
                  <div>
                    
                    <div class="text-small">
                      <strong><h6><?=$message['login']?></h6></strong>
                      <p class="message"><?=$message['content']?></p>
                      <p class="message"><?=$message['date_time']?></p>
                    </div>
                  </div>
                <?php
                  //lu
                  $admin->markRead($_SESSION['idadmin'],$_GET['idctc'],$message['content']);
                    }
                  }
                ?>
            
          </div>
        </div>
          <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" name="message"></textarea>
            <button type="submit" class="input-group-text"><i class="far fa-paper-plane"></i></button>
          </div>
        </form>
    </div>
    <div class="box-wrapper-l">
      <div>
        <!-- <div class="search-panel">
              <form>
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Rechercher" name="search" value="">
                      <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                  </div>
              </form>
          </div> -->
          <div class="contact-list-container">
              <div class="contact-list" >
                  <?php
                  foreach($contacts as $contact){
                  ?>
                  <a href="inbox.php?idctc=<?=$contact['id']?>">
                  <div class="contact" data-nom = "<?=$contact['login']?>">
                    <span><?=$contact['login']?></span><span class="badge bg-secondary"><?=$admin->countUnread($_SESSION['idadmin'],$contact['id'])[0]?></span>
                  </div>
                  </a>
                <?php
                  }
                ?>
              </div>
          </div>
        </div>
    </div>
  </div>  
  <?php
}
else{
  $nom = " "
?>
  <div class="box-container">
    <div class="box-wrapper-r">
        <form>
        <div class="card border-dark mb-4" style="max-width: 50rem;">
          <div class="card-header"><span class="badge bg-secondary"><?=$nom?></span></div>
          <div class="card-body text-dark">
         
            
          </div>
        </div>
          <div class="input-group">
            <textarea class="form-control" aria-label="With textarea"></textarea>
            <button type="submit" class="input-group-text" disabled><i class="far fa-paper-plane"></i></button>
          </div>
        </form>
    </div>
    <div class="box-wrapper-l">
      <div>
        <div class="search-panel">
              <form>
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Rechercher" name="search" value="">
                      <button class="btn btn-outline-secondary" type="submit" ><i class="fas fa-search" ></i></button>
                  </div>
              </form>
          </div>
          <div class="contact-list-container">
              <div class="contact-list" >
                  <?php
                  foreach($contacts as $contact){
                  ?>
                  <a href="inbox.php?idctc=<?=$contact['id']?>">
                  <div class="contact" data-nom = "<?=$contact['login']?>">
                    <span><?=$contact['login']?></span><span class="badge bg-secondary"><?=$admin->countUnread($_SESSION['idadmin'],$contact['id'])[0]?></span>
                  </div>
                  </a>
                <?php
                  }
                ?>
              </div>
          </div>
        </div>
    </div>
  </div>


<?php
}
?>

<script>
  var contacts = document.querySelectorAll('.contact');
  contacts.forEach((contact) => {
    contact.addEventListener('click', function(){
      document.querySelector(".card-header").innerHTML = `<span class="badge bg-secondary">${contact.dataset.nom}</span>`
    });
  });


  var cardbody = document.querySelector('.card-body');
  cardbody.scrollTop =cardbody.scrollHeight - cardbody.clientHeight;
</script>
<?php
include('closenav.php');
?>