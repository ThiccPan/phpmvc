<?php 
  class Novel_model{
    private $table = "novel";
    private $tableStructure = "id, title, status, cur_chapter, link";
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

      public function addNovel($id, $title, $status, $cur_chapter, $link)
      {
        $query = "INSERT INTO novel ({$this->tableStructure}) VALUES ('', :title,:statuss,:cur_chapter,:link)";
        $this->db->query($query);
        $this->db->bind('title',$title);
        $this->db->bind('statuss',$status);
        $this->db->bind('cur_chapter',$cur_chapter);
        $this->db->bind('link',$link);

        $this->db->execute();

        return $this->db->rowCount();

      }
  }


?>