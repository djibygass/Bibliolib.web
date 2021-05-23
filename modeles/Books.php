<?php

require_once "Modele.php";

class Books extends Modele{
  //return all books 
  public function retrieveAllBooks(){
    $sql="SELECT auteurs.nom AS A_nom,categories_livres.nom AS C_nom,titre,categories_livres.id_catLivres AS idCat,description,photo,quantite,id_livres,prix  
    FROM livres
    JOIN auteurs USING (id_auteurs)
    JOIN categories_livres USING (id_catLivres)
    Where stat_livre  = '1';";
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

  //check that the book is not already borrowed...
  public function checkInBorrowedBook(int $idUser, int $idBook){
    $sql ="SELECT COUNT(*) FROM emprunter WHERE id_clients = ? AND id_livres = ?";
    
    return $this->executeRequest($sql,[$idUser,$idBook])->fetchAll(PDO::FETCH_ASSOC);
  }

  // return null 
  //this function is in charge of insert the (user_id, book_id) in the bd and update the quantity of books 
  public function borrowABook(int $idUser, int $idBook){

    $sql='INSERT INTO emprunter(id_clients,id_livres,en_magasin,statut) values (?,?,0,1)';
    $this->executeRequest($sql,[$idUser,$idBook]);
  
    $sql='UPDATE livres SET quantite = quantite-1 where id_livres = ?';
    $this->executeRequest($sql,[$idBook]);

  }
  //this function is in charge of update the deliver plan when the user want to do clickcollect
  //on borrowed book
  public function update(int $idUser, int $idBook){  
    $sql='UPDATE emprunter SET en_magasin = 1, statut = 0 WHERE id_clients = ? AND id_livres = ?';
    $this->executeRequest($sql,[$idUser,$idBook]);

  }
   //this function is in charge of update the deliver plan when the user want to do clickcollect
   //on bought book
   public function updateachat(int $idUser, int $idBook){  
    $sql='UPDATE achats SET en_magasin = 1, statut = 0 WHERE id_clients = ? AND id_livres = ?';
    $this->executeRequest($sql,[$idUser,$idBook]);

  }
  //rendre livre 
 public function returnABook(int $idBook){
   //supp l'user aussi
  $sql ='DELETE FROM emprunter where id_livres = ?';
  $this->executeRequest($sql,[$idBook]);

  $sql='UPDATE livres SET quantite = quantite+1 where id_livres = ?';
  $this->executeRequest($sql,[$idBook]);
 }
 // return a book when we give him the id.
 public function showABook(int $idBook){
  $sql="SELECT auteurs.nom as A_nom,categories_livres.nom AS C_nom,titre,categories_livres.id_catLivres as idCat,description,photo,quantite,id_livres,prix  
  FROM livres
  JOIN auteurs USING (id_auteurs)
  JOIN categories_livres USING (id_catLivres)
   WHERE id_livres = ?;";
   return $this->executeRequest($sql,[$idBook])->fetch(PDO::FETCH_ASSOC);
 }
 // return the result of searching 'str'
 public function searchABook(string $str){
  $sql="SELECT auteurs.nom as A_nom,categories_livres.nom AS C_nom,titre,categories_livres.id_catLivres as idCat,description,photo,quantite,id_livres,prix  
  FROM livres
  JOIN auteurs USING (id_auteurs)
  JOIN categories_livres USING (id_catLivres)
  WHERE titre like ? ;";
  $str = "%".$str."%";
   return $this->executeRequest($sql,[$str])->fetchAll(PDO::FETCH_ASSOC);
 }

 public function searchBooks($name){
  $sql="SELECT * FROM livres WHERE titre like ? ";
  $name = "%".$name."%";
  return $this->executeRequest($sql,[$name])->fetchAll(PDO::FETCH_ASSOC);
}

public function AllBooks(){
  $sql="SELECT * FROM livres";
  return $this->executeRequest($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// return all bought book depending of the user id
public function boughtBooks($idUser){
  $sql = "SELECT auteurs.nom as A_nom,categories_livres.nom AS C_nom,titre,categories_livres.id_catLivres as idCat,description,photo,id_livres  
  FROM achats
  JOIN livres USING (id_livres)
  JOIN auteurs USING (id_auteurs)
  JOIN categories_livres USING (id_catLivres)
  JOIN clients USING (id_clients)
  Where achats.id_clients = ?;";

  return $this->executeRequest($sql,[$idUser])->fetchAll(PDO::FETCH_ASSOC);
}

//buy a book
public function buyABook(int $idUser, int $idBook){

  $sql='INSERT INTO achats(id_clients,id_livres,en_magasin,statut) values (?,?,0,0)';
  $this->executeRequest($sql,[$idUser,$idBook]);

  $sql='UPDATE livres SET quantite = quantite-1 where id_livres = ?';
  $this->executeRequest($sql,[$idBook]);
}
//return all lost book
public function lostBooks($idUser){
  $sql = "SELECT auteurs.nom as A_nom,categories_livres.nom AS C_nom,titre,categories_livres.id_catLivres as idCat,description,photo,id_livres  
  FROM pertes
  JOIN livres USING (id_livres)
  JOIN auteurs USING (id_auteurs)
  JOIN categories_livres USING (id_catLivres)
  JOIN clients USING (id_clients)
  Where pertes.id_clients = ?;";

  return $this->executeRequest($sql,[$idUser])->fetchAll(PDO::FETCH_ASSOC);
}
//check that th author do not already exist 
public function checkthisauth(string $author){
  $sql = "SELECT nom FROM auteurs WHERE nom = ?";
  return $this->executeRequest($sql,[$author])->fetch();
}
//check that th author do not already exist 
public function checkthiscat(string $categorie){
  $sql = "SELECT nom FROM categories_livres WHERE nom = ?";
  return $this->executeRequest($sql,[$categorie])->fetch();
}
//insert new author
public function addAuthor(string $nom){
  $sql = "INSERT INTO auteurs(nom) VALUES (?)";
  $this->executeRequest($sql,[$nom]);
}
//insert new categorie
public function addCat(string $nom){
  $sql = "INSERT INTO categories_livres(nom) VALUES (?)";
  $this->executeRequest($sql,[$nom]);
}
//show All categories
public function showCat(){
  $sql = "SELECT * FROM categories_livres";
  return $this->executeRequest($sql)->fetchAll(PDO::FETCH_ASSOC);
}
//show All authors
public function showAuthors(){
  $sql = "SELECT * FROM auteurs";
  return $this->executeRequest($sql)->fetchAll(PDO::FETCH_ASSOC);
}
//Add a new book
public function addNewBook(string $title, string $description, int $price, int $idauth, int $idcat, string $photo){
  $sql = "INSERT INTO livres(titre,description,prix,quantite,id_auteurs,id_catLivres, photo, stat_livre) VALUES (?,?,?,0,?,?,?,0)";
  $this->executeRequest($sql, [$title,$description,$price,$idauth,$idcat,$photo]);
}

}
?>