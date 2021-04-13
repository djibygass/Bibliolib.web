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
  public function registerThisCustomer(string $lastname,string $firstname,string $login, string $password, string $adresse){
    $sql = "INSERT INTO clients(nom, prenom, login, mdp, adresse) VALUES (?, ?, ?, ?, ?)";
    return $this->executeRequest($sql,[$lastname,$firstname,$login,$password,$adresse]);
  }
  //contact form -> support
  public function sendMessage(string $firstname, string $lastname, string $email,string $subject, string $message ){
    $sql = "INSERT INTO customers_questions(prenom, nom, email, sujet, contenu, date_time) VALUES (?,?,?,?,?,NOW())";
    return $this->executeRequest($sql,[$firstname,$lastname,$email,$subject,$message]);
  }
 

}

?> 