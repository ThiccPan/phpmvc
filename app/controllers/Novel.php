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
  }
?>