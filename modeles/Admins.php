<?php

require_once "Modele.php";

class Admins extends Modele{
  //check that the Admin exist
  public function checkThisAdmin(string $login){
    $sql = "SELECT * FROM admin_site WHERE login = ?";
    return $this->executeRequest($sql,[$login])->fetch();
  }
}

?>