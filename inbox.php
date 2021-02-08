<?php
session_start();
include('nav_bar5.php');
if(!$_SESSION['motdepasse']){
  header('location:admin.php');
}
?>
<div class="box-container">
   <div>
   
   </div>
   <div>
   
   </div>
</div>
<?php
include('closenav.php');
?>