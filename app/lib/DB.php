<?php
  class DB {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $db;
    private $stmt;

    public function __construct() {
      // set dsn (data source name)
      $dsn = "mysql:host=$this->host;dbname=$this->dbname";
      // set options
      $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );
      // create a new PDO instance
      try {
        $this->db = new PDO($dsn, $this->user, $this->pass, $options);
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
    // query methode to send query to database
    public function query($query) {
      $this->stmt = $this->db->prepare($query);
    }
    // bind methode to bind values to the query
    public function bind($param, $value) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
      $this->stmt->bindValue($param, $value, $type);
    }
    // execute methode to execute the query
    public function execute() {
      return $this->stmt->execute();
    }
    // resultSet methode to get the result of the query
    public function resultSet() {
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // single methode to get a single record from the query
    public function single() {
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    // rowCount methode to get the row count of the query
    public function rowCount() {
      return $this->stmt->rowCount();
    }
  }