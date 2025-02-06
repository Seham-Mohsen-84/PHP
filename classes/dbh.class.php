<?php
class DBH {
  private $host = "localhost";
  private $user = "root";
  private $pwd =";
  private $dbName ="oopphp";

  protected function connect (){
    $Dsn = "mysql:host = ".$this->host . ';dbname = ' .$this->dbName;
    $Pdo = new PDO($Dsn,$this->user ,$this->pwd );
     $Pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
     return $pdo ;
  }
}



 ?>
