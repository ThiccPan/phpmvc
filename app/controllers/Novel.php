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

    public function detail($id){
      $data['judul'] = "Detail Novel";
      $data['novel'] = $this->model('Novel_model')->getNovelByID($id);
      
      $this->view('templates/header',$data);
      $this->view('novel/detail',$data);
      $this->view('templates/footer');
    }
  }
?>