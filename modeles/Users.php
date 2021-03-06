<?php
require_once "Modele.php";

class Users extends Modele{

  //check that the user exist
  public function checkThisUser(string $login){
    $sql = "SELECT * FROM clients WHERE login = ?";
    return $this->executeRequest($sql,[$login])->fetch();
  }
    //check that the user's subscribtion 
    public function checkAbonnement(int $id){
      $sql = "SELECT * FROM abonnements WHERE id_clients = ?";
      return $this->executeRequest($sql,[$id])->fetch();
    }
    //User's subscribtion 
    public function Subscribtion(int $id,string $iban, string $bic){
      $sql = "INSERT INTO abonnements(id_clients,iban,bic,statut,date_debut) VALUES (?,?,?,'1',NOW())";
      return $this->executeRequest($sql,[$id,$iban,$bic])->fetch();
    }
  
}
?>