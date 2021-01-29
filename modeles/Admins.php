<?php

require_once "Modele.php";

class Admins extends Modele{
  //check that the Admin exist
  public function checkThisAdmin(string $login){
    $sql = "SELECT * FROM admins WHERE login = ? AND A_a = '0' ";
    return $this->executeRequest($sql,[$login])->fetch();
  }
}

?>