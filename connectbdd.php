<?php
function getBdd(){
   $db = new PDO("mysql:host=localhost;dbname=bibliolib;charset=UTF8","root","");
   return $db;
}
?>