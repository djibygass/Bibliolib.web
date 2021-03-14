<?php
require_once "Modele.php";

class Posts extends Modele{
   public function showAllPost(){
      $sql="SELECT * FROM actu_img";
      return $this->executeRequest($sql)->fetchAll();
   }
}
?>