<?php
/*
- abstract class - also allowing inheritance
- used for database connection and SQL request execution
*/
abstract class Modele{
  //accessible without instantiation -> static
  static $db;
  
  //return the conection object
  private static function getdb(){
    //$this-> to refer to the current object
    //self:: to refer to the current class
    if (self::$db == null){
      self::$db = new PDO("mysql:host=localhost;dbname=bdd_bibliotheque;charset=UTF8","root","");
    }
    return self::$db;
  }
  /*
  SQL request
  1th param -> string (the request)
  2nd param -> Array.(replace the '?' in the request if they isset)
  */
  protected function executeRequest(string $sql,array $params = null){
    if($params==null){
      //execute without params
      $result = self::getdb()->query($sql);
    }
    else{
      //execute with params
      $result = self::getdb()->prepare($sql);
      $result->execute($params);
    }
    return $result;
  }

  
}
?>