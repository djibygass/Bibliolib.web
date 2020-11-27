<?php

require_once "Modele.php";

Class Customers extends Modele{
/*REGISTRATION*/
  //check that the Customer does not already exist
  public function checkThisUser(string $login){
    $sql = "SELECT login FROM clients WHERE login = ?";
    return $this->executeRequest($sql,[$login])->fetchAll(PDO::FETCH_ASSOC);
  }
  //register
  public function registerThisCustomer(string $lastname,string $firstname,string $login, string $password){
    $sql = "INSERT INTO clients(nom, prenom, login, mdp) VALUES (?, ?, ?, ?)";
    return $this->executeRequest($sql,[$lastname,$firstname,$login,$password]);
  }

}

?> 