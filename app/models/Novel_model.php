<?php 
  class Novel_model{
      private $dbh; //database handler
      private $stmt; //query statement

      public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
          $this->dbh = new PDO($dsn,'root','');
        } catch (PDOException $e) {
          die($e->getMessage());
        }
      }
      public function getAllNovel()
      {
        $this->stmt = $this->dbh->prepare('SELECT * FROM novel');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
      }
  }


?>