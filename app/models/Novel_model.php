<?php 
  class Novel_model{
    private $table = "novel";
    private $db;

      public function __construct() {
        $this->db = new Database();
      }
 
      public function getAllNovel()
      {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
      }

      public function getNovelByID($id)
      {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id ");
        $this->db->bind('id',$id);
        return $this->db->single();
      }
  }


?>