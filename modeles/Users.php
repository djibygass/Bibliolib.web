<?php
require_once "Modele.php";

class Users extends Modele{

  
  public function checkThisUser(string $login){
    $sql = "SELECT * FROM clients WHERE login = ?";
    return $this->executeRequest($sql,[$login])->fetch();
  }
  
}
?>