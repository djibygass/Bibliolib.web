<?php
session_start();
include('nav_bar2.php');
require_once("modeles/Users.php");

if(!isset($_SESSION['idClient'])){
   header('location:connexion.php');
}
$id = $_SESSION['idClient'];
$users = new Users();
$res = $users->checkAbonnement($id);
if ($res){
?>
   <div class='container2'>
      <h3>Votre abonnement est bien activé depuis <?=$res['date_debut']?></h3>
      <br>
      <br>
      <div>
         <button class="btn btn-transparent " onclick="confirm()"><span>me désabonner</span></button>
      </div>
   </div>
<?php
}else{
?>
      <?php
        if (isset($_GET['Erreur'])){
          ?>
          <div class="alert alert-danger" role="alert">
            Champs incorrect
          </div>
        <?php
        }
        ?>
   <div class="container2">

      <div>
      <h2>Je m'abonne à BiBliolib</h2>
      <br>
      <form action="traitements/abonnement.php" method="post">
         <div class="form-group">
            <input type="text" class="form-control"  placeholder="IBAN" name='iban' required>
         </div>
         <div class="form-group">
            <input type="text" class="form-control"  placeholder="BIC" name='bic' required>
         </div>
         <div>
         <button type="submit" class="btn btn-transparent">Valider</button>
         </div>
         <br>
         <a  href=""><span class="link"><i class="far fa-question-circle"></i>&nbsp plus d'informations</span></a>
      </form>
      </div>
   </div>
  

<?php
}
?>
<script>
   function confirm(){
      var txt;
                if (confirm("Press a button!")) {
                    txt = "You pressed OK!";
                } else {
                    txt = "You pressed Cancel!";
                }
   }
</script>
<?php
include('closenav.php');
?>





