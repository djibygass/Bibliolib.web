<?php
require_once "Modele.php";

class Messages extends Modele{
  //Show Messages
  public function ShowMessages(int $idsender, int $idrecipient){
    $sql = "SELECT * FROM chatbox JOIN admins ON admins.id = chatbox.id_sender ORDER BY date_time";
    return $this->executeRequest($sql,[$idsender])->fetch();
  }
  //show the list of admins except $login
  public function ShowAdmins(string $login){
    $sql = "SELECT * FROM admins WHERE login != ?";
    return $this->executeRequest($sql,[$login])->fetchAll();
  }
}

?>