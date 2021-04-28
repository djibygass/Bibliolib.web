<?php

require_once "Modele.php";

class Admins extends Modele{
  //check that the Admin exist  
  public function checkThisAdmin(string $login){
    $sql = "SELECT * FROM admins WHERE login = ? AND A_a = '0' ";
    return $this->executeRequest($sql,[$login])->fetch();
  }
  //show the list of admins except $login
  public function ShowAdmins(string $login){
    $sql = "SELECT * FROM admins WHERE login != ?";
    return $this->executeRequest($sql,[$login])->fetchAll();
  }
  // sell a book
  public function sellBook(int $idLivre,string $nomClient,string $email){
    $sql = "INSERT INTO ventes_en_magasin(id_livres,nom_prenom,email,date_time) VALUES (?,?,?,NOW())";
    $this->executeRequest($sql,[$idLivre,$nomClient,$email]);

    $sql='UPDATE livres SET quantite = quantite-1 where id_livres = ?';
    $this->executeRequest($sql,[$idLivre]);
  }
  //bought books to be collected
  public function bbtobecollected(){
    $sql = "SELECT id_livres,titre, id_clients,login  
    FROM achats
    JOIN livres USING (id_livres)
    JOIN clients USING (id_clients)
    where en_magasin = 1 and statut = 0";
    return $this->executeRequest($sql)->fetchAll();
  }
    //count bought books to be collected
    public function countbbtobecollected(){
      $sql = "SELECT COUNT(*)
      FROM achats
      JOIN livres USING (id_livres)
      JOIN clients USING (id_clients)
      where en_magasin = 1 and statut = 0";
      return $this->executeRequest($sql)->fetch();
    }
   // books to be collected
   public function tobecollected(){
    $sql = "SELECT id_livres,titre, id_clients,login  
    FROM emprunter
    JOIN livres USING (id_livres)
    JOIN clients USING (id_clients)
    where en_magasin = 1 and statut = 0";
    return $this->executeRequest($sql)->fetchAll();
  }
  // count books to be collected
  public function counttobecollected(){
    $sql = "SELECT COUNT(*)  
    FROM emprunter
    JOIN livres USING (id_livres)
    JOIN clients USING (id_clients)
    where en_magasin = 1 and statut = 0";
    return $this->executeRequest($sql)->fetch();
  }
  //updating the statut after the collect
  public function afterCollectEmprunt(int $idLivre,int $idClient){
    
    $sql='UPDATE emprunter SET statut = 1 where id_livres = ? and id_clients = ?';
    $this->executeRequest($sql,[$idLivre,$idClient]);
  }
  //updating the statut after the collect bought books
  public function afterCollectAchats(int $idLivre,int $idClient){
    
    $sql='UPDATE achats SET statut = 1 where id_livres = ? and id_clients = ?';
    $this->executeRequest($sql,[$idLivre,$idClient]);
  }
   // order a book
   public function order(string $bookTitle){
    $sql = "INSERT INTO commande_livres(titre_livre) VALUE (?)";
    $this->executeRequest($sql,[$bookTitle]);
  }
  //All users Questions
  public function Questions(){
    $sql = "SELECT contenu, email, id_clients, login  
    FROM users_questions
    JOIN clients USING (id_clients)
    where statut = 0 and reponse = ' ' ";
    return $this->executeRequest($sql)->fetchAll();
  }
   // count All users Questions
   public function countQuestions(){
    $sql = "SELECT COUNT(*) 
    FROM users_questions
    JOIN clients USING (id_clients)
    where statut = 0 and reponse = ' ' ";
    return $this->executeRequest($sql)->fetch();
  }
  //after response
  public function afterRespond(string $reponse, string $email, string $contenu){
    $sql = "UPDATE users_questions SET statut = '1', reponse = ? where email = ? and contenu = ? ";
    return $this->executeRequest($sql,[$reponse,$email,$contenu]);
  }

//All customers Questions
  public function mailsSupport(){
    $sql = "SELECT * FROM customers_questions";
    return $this->executeRequest($sql)->fetchAll();
  }
  // count All customers Questions
  public function countmailsSupport(){
    $sql = "SELECT COUNT(*) FROM customers_questions";
    return $this->executeRequest($sql)->fetch();
  }
  //All customers Questions
  public function delMail(int $idmail){
    $sql = "DELETE FROM customers_questions where id = ?";
    return $this->executeRequest($sql,[$idmail]);
  }
  //count all unread messages
  public function countUnreadMessages(int $idadmin){
    $sql = "SELECT COUNT(*) FROM chatbox where id_recipient = ? and lu = '0'";
    return $this->executeRequest($sql,[$idadmin])->fetch();
  }
  //count unread message for each contact
  public function countUnread(int $idadmin, int $idcontact){
    $sql = "SELECT COUNT(id) FROM chatbox where id_recipient = ? and id_sender = ? and lu = '0'";
    return $this->executeRequest($sql,[$idadmin,$idcontact])->fetch();
  }
  //show messages
  public function showMessages(){
    $sql = "SELECT * FROM chatbox JOIN admins ON admins.id = chatbox.id_sender ORDER BY date_time";
    return $this->executeRequest($sql)->fetchAll();
  }
  // contact name
  public function name(int $idcontact){
    $sql = "SELECT * FROM admins where id = ?";
    return $this->executeRequest($sql,[$idcontact])->fetch();
  }
  //send a message
  public function sendMsg(int $idsender,int $idrecipient,string $message){
    $sql = "INSERT INTO chatbox(id_sender,id_recipient,content,date_time,lu) VALUES (?,?,?,NOW(),'0')";
    $this->executeRequest($sql,[$idsender,$idrecipient,$message]);
  }
  // mark read when he opens the message.
  public function markRead(int $idrecipient, int $id_sender, string $contenu){
    $sql = "UPDATE chatbox SET lu = '1' where id_recipient = ? and id_sender = ? and  content = ? ";
    return $this->executeRequest($sql,[$idrecipient,$id_sender,$contenu]);
  }
}

?>