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
      return $this->executeRequest($sql,[$id,$iban,$bic]);
    }
     //User's unsubscribtion 
     public function unsubscribtion(int $id){
      $sql = "DELETE FROM abonnements where id_clients = ?";
      return $this->executeRequest($sql,[$id]);
    }
    //show all adresses
    public function showAdresses(){
      $sql = "SELECT * FROM adresses";
      return $this->executeRequest($sql)->fetchAll();
    }
    //declare a lost
    public function declare(int $idClients,int $idLivres,string $causes){
      $sql = "INSERT INTO pertes(id_clients,id_livres,causes) VALUES (?,?,?)";
      $this->executeRequest($sql,[$idClients, $idLivres,$causes]);

      $sql = "DELETE FROM emprunter WHERE id_clients = ? AND id_livres = ?";
      $this->executeRequest($sql,[$idClients, $idLivres]);
    }

  //ask a question 
   public function sendMessage(int $idClients, string $email,string $message){
    $sql = "INSERT INTO users_questions(id_clients, email, contenu, date_time,statut, reponse, lu) VALUES (?,?,?,NOW(),'0',' ', '0')";
    return $this->executeRequest($sql,[$idClients,$email,$message]);
  }
  //received an answer
  public function answers(int $idClients){
    $sql = "SELECT reponse FROM users_questions where id_clients = ? and lu ='0' ";
    return $this->executeRequest($sql,[$idClients])->fetchAll();
  }
    //read the message
    public function read(int $idClients){
      $sql = "UPDATE users_questions SET lu = '1' where id_clients = ? ";
      return $this->executeRequest($sql,[$idClients]);
    }
}
?>