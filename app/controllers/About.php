<?php 
  class About extends Controller{
    public function index($nama = "Ivan", $pekerjaan = "Mahasiswa", $umur = 19){
      $data["nama"] = $nama;
      $data['pekerjaan'] = $pekerjaan;
      $data['umur'] = $umur;
      $data['judul'] = "About";

      $this->view('templates/header', $data);
      $this->view('about/index', $data);
      $this->view('templates/footer');
    }
  }
?>