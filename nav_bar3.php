<?php
if(!$_SESSION['LoginAdmin']){
  header('location:admin.php');
}
require_once "./modeles/Admins.php";
$admin = new Admins();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@100&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css?<?php echo time(); ?>">
  <title> BiblioB</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/bs.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body class='bodyM'>
<nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
    
    <a class="navbar-brand" href="index.php"><img class="logonav" src="./img/logo.png" alt="logo"></a>

    <ul class='nav-links'>
  
      <li>
        <a href="inbox.php" class=""  title="ChatBox">
        <i class="fas fa-comments"></i><span class="badge bg-secondary"><?=$admin->countUnreadMessages($_SESSION['idadmin'])[0]?></span>
        </a>
      </li>
      <li>
        <a href="traitements/deconnectadmin.php" class=""  title="deconnexion">
        <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
      
    </ul>
    <div class='burger'>
       <span><i class="fas fa-bars"></i></span>
    </div>
  </nav>
  <script></script>




























