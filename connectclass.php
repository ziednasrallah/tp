<?php
class basesdonnees 
{
private $dbhost = 'localhost';
private $dbname = 'gestioncb';
private $dbuser = 'root';
private $dbpwd = '';

  public $conn = null;
  public function connectDB ()
  { try {
  this->conn= new PDO ('msql:host='.this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->dbpwd);
  }
  catch (PDOExeption $e){
      echo $e->getMessage();
  }
  return $this->conn;
}
}