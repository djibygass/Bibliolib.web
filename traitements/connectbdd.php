<?php
//1. Connexion à la base de données
function getBdd(){
    try {
        $bdd = new PDO("mysql:host=localhost;dbname=bdd_bibliotheque;charset=UTF8", "root", "");
        return $bdd;
    }catch(PDOException $e){
        echo 'La connexion à la bdd a echoué';
    }
}
?>	
