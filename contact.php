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
    <form method='POST' action='#'>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Prénom" name='login'>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nom" name='Login'>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" name='login'>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Sujet" name='login'>
          </div>
          <div class="form-group">
           <textarea class="form-control"        id="exampleFormControlTextarea1" placeholder="Message" rows="4"></textarea>
          </div>
          <div>
          <button type="submit" class="btn btn-transparent">Envoyer</button>
          </div>
        </form>
    </div>
  </div>
</div><!-- // End #container -->