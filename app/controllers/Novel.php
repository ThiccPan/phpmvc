<?php 
  class Novel extends Controller{
    
    public function index()
    {
      $data['judul'] = "Daftar Novel";
      $data['novel'] = $this->model('Novel_model')->getAllNovel();
      
      $this->view('templates/header',$data);
      $this->view('novel/index',$data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = "Detail Novel";
      $data['novel'] = $this->model('Novel_model')->getNovelByID($id);
      
      $this->view('templates/header',$data);
      $this->view('novel/detail',$data);
      $this->view('templates/footer');
    }

    public function addNovel() {
      $id = "";
      $title = $_POST["title"];
      $status = $_POST["status"];
      $cur_chapter = $_POST["cur_chapter"];
      $link = $_POST["link"];

      if ($this->model('Novel_model')->addNovel($id,$title,$status,$cur_chapter,$link) > 0) {
        header("Location:" . BASEURL . "views/novel/index.phpp");
        exit;
      }
    }
  }
?>