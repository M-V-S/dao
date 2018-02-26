<?php
  Sql extends PDO{
    private $conn;

    public function __construct(){
      $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "bfm", "1234");

    }

    private function setParams($statment, $paramets = array()){

      foreach ($paramets as $key => $value) {
        $this->setParam($key, $value);
      }
    }
    private function setParam($statment, $key, $value){
      $statment->bindParam($key, $value);
    }

    public function query($rowQuery, $params = array()){
      $stmt = $this->conn->prepare($rowQuery);

      $this->setParam($stmt, $params);

      return $stmt->execute($stmt, $params);

    }
    public function select($rowQuery, $params = array()){
      $this->query("$rawQuery, $params");
    }

  }

  ?>
