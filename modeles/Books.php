<?php

require_once "Modele.php";

class Books extends Modele{
  //return all books 
  public function retrieveAllBooks(){
    $sql="SELECT auteurs.nom as A_nom,categories_livres.nom AS C_nom,titre,categories_livres.id_catLivres as idCat,description,photo,quantite,id_livres  
    FROM livres
    JOIN auteurs USING (id_auteurs)
    JOIN categories_livres USING (id_catLivres);";
    return $this->executeRequest($sql)->fetchAll(PDO::FETCH_ASSOC);
  }
  //return all borrowed books
  public function borrowedBooks(int $idUser){
    $sql = "SELECT auteurs.nom as A_nom,categories_livres.nom AS C_nom,titre,categories_livres.id_catLivres as idCat,description,photo,id_livres  
    FROM emprunter
    JOIN livres USING (id_livres)
    JOIN auteurs USING (id_auteurs)
    JOIN categories_livres USING (id_catLivres)
    JOIN clients USING (id_clients)
    Where emprunter.id_clients = ?;";
  
    
    return $this->executeRequest($sql,[$idUser])->fetchAll(PDO::FETCH_ASSOC);
  }
  // return null 
  //this function is in charge of insert the (user_id, book_id) in the bd and update the quantity of books 
  public function borrowABook(int $idUser, int $idBook){

    $sql='INSERT INTO emprunter(id_clients,id_livres) values (?,?)';
    $this->executeRequest($sql,[$idUser,$idBook]);
  
    $sql='UPDATE livres SET quantite = quantite-1 where id_livres = ?';
    $this->executeRequest($sql,[$idBook]);

  }
 public function returnABook(int $idBook){
   //supp l'user aussi
  $sql ='DELETE FROM emprunter where id_livres = ?';
  $this->executeRequest($sql,[$idBook]);

  $sql='UPDATE livres SET quantite = quantite+1 where id_livres = ?';
  $this->executeRequest($sql,[$idBook]);
 } 





}
?>