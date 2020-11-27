<?php
include ('traitements/connectbdd.php');
session_start();
include('nav_bar3.php');
if(!$_SESSION['motdepasse']){
  header('location:admin.php');
}
$req=getBdd()->query("SELECT * FROM livres");
$req0=getBdd()->query("SELECT * FROM clients");
$req1=getBdd()->query("SELECT * FROM categories_livres");
$req2=getBdd()->query("SELECT * FROM auteurs");
?>
<a href="#" id="upPage"><i class="fas fa-arrow-alt-circle-up"></i></a>
<div class='containerr'>
      <div class=center>
        <h2 class='title' id='1'>SUPPRIMER UN LIVRE</h2>
      </div>
      <table class="table">
        <?php
          while($data=$req->fetch()){
            echo  '<tr><td>'.$data['titre'].'</td>';
          ?>
            <td>
            <a href="traitements/suppressionlivre.php?id=<?=$data['id_livres']?>"><button class="btn btn-transparent">Supprimer</button></a>  
            </td> 
        </tr>
          <?php
         }
          ?>  
      </table>
  
      <div class=center>
        <h2 class='title' id='2'>SUPPRIMER UN CLIENT</h2>
      </div>
      <table class="table">
        <?php
          while($data=$req0->fetch()){
            echo  '<tr><td>'.$data['nom'].'</td>'.'<td>'.$data['prenom'].'</td>'.'<td>'.$data['login'].'</td>';
          ?>
            <td class ='tdbutton'>
            <a href="traitements/suppressionclient.php?id=<?=$data['id_clients']?>"><button class="btn btn-transparent">Supprimer</button></a>  
            </td> 
        </tr>
          <?php
         }
          ?>  
      </table>




    
      <div class='content'>
        <h2 class='title' id='3'>AJOUTER UN ADMIN</h2>
      </div>
      <div class='container2'>  
      <div>
        <?php
          if (isset($_GET['ERREUR'])){
          ?>
          <div class="alert alert-danger" role="alert">
            Les mots de passes sont differents !!
          </div>
          <?php
          }
          elseif (isset($_GET['ERREUR1'])){
            ?>
            <div class="alert alert-danger" role="alert">
              Merci de completer tous les champs !!
            </div>
            <?php
            }
          ?>
      <form method='POST' action='traitements/ajoutadmin.php'>
      <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Login ADMIN" name='login'>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Mot de passe" name='motdepasse'>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Vérification" name='motdepasseVerif'>
        </div>
        <div>
        <button type="submit" class="btn btn-transparent">Ajouter</button>
        </div>
      </form>
    </div>
  </div>



  
    <div class='content'>
      <h2 class='title' id='4'>AJOUTER UN LIVRE</h2>
    </div>

      <div class='container2'>
        <div>
      <?php
          if (isset($_GET['ERREUR2'])){
          ?>
          <div class="alert alert-danger" role="alert">
            ce livre existe déja en base de donnée !!
          </div>
          <?php
          }
          elseif (isset($_GET['ERREUR3'])){
            ?>
            <div class="alert alert-danger" role="alert">
              Merci de completer tous les champs !!
            </div>
            <?php
            }
          ?>
     
        <form method='POST' action='traitements/ajoutlivre.php'>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titre du Livre" name ='titre'>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Description" name='description'>
            </div>
            <div class="form-group">
              <input type="number" class="form-control"  min="50" max="200" placeholder='Quantité' name='quantite'>
            </div>
 
            <div class="form-group">
                  <select class="form-control" name='nom'>
                    <?php while ($data=$req2->fetch()){?>
                    <option value='<?=$data['id_auteurs']?>'><?=$data['nom'];?></option>
                    <?php $_SESSION['ida']=$data['id_auteurs'];}?>
                  </select>
              </div>

              <div class="form-group">
                  <select class="form-control" name='categorie'>
                    <?php while ($dat=$req1->fetch()){?>
                    <option><?=$dat['nom'];?></option>
                    <?php $_SESSION['idcat']=$dat['id_catLivres'];}?>
                  </select>
              </div>

            <div class="form-group">
              <input type='file'  id="formGroupExampleInput2"  name='photo'>
            </div>
            <div>
            <button type="submit" class="btn btn-transparent">Ajouter</button>
            </div>
        </form>
        </div>
      </div>   
  </div>






  <div class='content'>
        <h2 class='title' id='5'>Ajouter UN AUTEUR</h2>
      </div>
      <div class='container2'>  
      <div>
          <?php

          if (isset($_GET['ERREUR4'])){
            ?>
            <div class="alert alert-danger" role="alert">
              cet auteur est déja dans la base !!
            </div>
            <?php
            }
            elseif (isset($_GET['ERREUR5'])){
              ?>
              <div class="alert alert-danger" role="alert">
                merci de completer tous les champs !!
              </div>
              <?php
              }
            ?>
          
      <form method='POST' action='traitements/ajoutauteur.php'>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Prénom et Nom" name='nom'>
        </div>
        <div>
        <button type="submit" class="btn btn-transparent">Ajouter</button>
        </div>
      </form>
    </div>
  </div>


  <div class='content'>
        <h2 class='title' id='6'>Ajouter UNE CATEGORIE</h2>
      </div>
      <div class='container2'>  
      <div>
          <?php

          if (isset($_GET['ERREUR6'])){
            ?>
            <div class="alert alert-danger" role="alert">
              categorie déja dans la base !!
            </div>
            <?php
            }
            elseif (isset($_GET['ERREUR7'])){
              ?>
              <div class="alert alert-danger" role="alert">
                merci de completer tous les champs !!
              </div>
              <?php
              }
            ?>
          
      <form method='POST' action='traitements/ajoutcategorie.php'>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Catégorie" name='categorie'>
        </div>
        <div>
        <button type="submit" class="btn btn-transparent">Ajouter</button>
        </div>
      </form>
    </div>
  </div>



  </div>





<?php
include('closenav.php');
?>