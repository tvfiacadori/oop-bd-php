<?php

namespace TryConect;

use \PDO;

class Database {

  private $db_name;
  private $db_user;
  private $db_pass;
  private $db_host;
  private $pdo;
  private $data;
  public $req;
  private $conn;

  public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')
  {
    $this->db_name = $db_name;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_host = $db_host;
    $this->conn = $this->getPDO();
    

  }

  private function getPDO()

  
  {

    if($this->conn === null)
    {
    $conn = new PDO('mysql:dbname=villes_france;host=localhost;charset=utf8', 'root', '' );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->conn = $conn;
    return $conn;

    }
   
    return $this->conn;
  }

  public function query($statement)
  {

    $this->req = $this->conn->query($statement);
    // $this->req->fetchALL(PDO::FETCH_OBJ);
    return $this->req->fetchALL();
  
  }

}
