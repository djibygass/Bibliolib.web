<?php
session_start();
require_once "../modeles/Books.php";
$books = new Books();
if(isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['description']) && !empty($_POST['description']) &&  isset($_POST['prix']) && !empty($_POST['prix']) &&  isset($_POST['idcat']) && !empty($_POST['idcat']) &&  isset($_POST['idauth']) && !empty($_POST['idauth'])){

  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $prix = $_POST['prix'];
  $idcate = $_POST['idcat'];
  $idauthh = $_POST['idauth'];
  $idcat = (int) $idcate;
  $idauth = (int) $idauthh;

  $file = $_FILES['photo'];
  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file['size'];
  $fileError = $file['error'];
  $fileType = $file['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  // Allow certain file formats
  if($fileActualExt != "jpg" && $fileActualExt != "png" && $fileActualExt != "jpeg" && $fileActualExt != "gif" ) {
    header("location:../espaceadmin.php?successaddbook=0");//Sorry, only JPG, JPEG, PNG & GIF files are allowed.
  }
  if($fileError === 0){
    if($fileSize < 1000000){
        $fileNewName = uniqid('', true).".".$fileActualExt;
        $fileDest = '../img/'.$fileNewName;
        move_uploaded_file($fileTmpName,$fileDest); 
        $books->addNewBook($titre,$description,$prix,$idauth,$idcat,$fileNewName);
        // echo $titre.'  '.$description.'  '.$prix.'  '.$idauth.'  '.$idcat.'  '.$fileNewName;
        header("location:../espaceadmin.php?successaddbook=1");
    }else{
      header("location:../espaceadmin.php?successaddbook=2");//way too big
    }
  }
  else{
    header("location:../espaceadmin.php?successaddbook=3");//erreur dans le fichier
  }

}
else{
  header("location:../espaceadmin.php?successaddbook=4");//element vide
}










// $target_dir = "img/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }



// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
?>