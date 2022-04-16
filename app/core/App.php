<?php

class App {
  protected $controller = "Home";
  protected $method = "index";
  protected $params = [];

  public function __construct() { //default when user first access webpage
    $url = $this->parseURL();
    
    if ($url === null) {//mengatasi error array offset null kalau url gk dimasukkan
      $url = [$this->controller];
    }

    if (file_exists('../app/controllers/' . $url[0] . '.php')) { //cek adanya controller yang dituju
      $this->controller = $url[0];
      unset($url[0]);//menghilangkan controller di url, sehingga array hanya memiliki parameter agar mudah mengakses parameternya
    }
      
    require_once '../app/controllers/' . $this->controller . '.php';//mengakses file controller sesuai dengan controller yang ingin diakses/kata pertama di url
    $this->controller = new $this->controller;

    if (isset($url[1])) {//cek apakah ada method yang ingin diakses
      if (method_exists($this->controller,$url[1])) {//cek apakah method yang ingin diakses tersedia dalam controller
        $this->method = $url[1];//mengubah variable method default menjadi method yang ingin diakses/kata kedua di url
        unset($url[1]);//menghilangkan method di url, sehingga array hanya memiliki parameter agar mudah mengakses parameternya
      }
    }

    //param
    if (!empty($url)) {//cek apakah ada parameterc di url dengan mengecek apakah ada array url
      $this->params = array_values($url);//megisi variable $params yang berupa array dengan sisa dari url tersebit 
    }

    call_user_func_array([$this->controller,$this->method],$this->params);//manggil cont,met,param
  }

  public function parseURL() { //function untuk mengambil url untuk diolah (mengakses controller/kata ke1, method/kata ke2, parameter/kata ke 3 dari url)
    if (isset($_GET["url"])) {
      $url = rtrim($_GET["url"],'/');//menghilangkan karakter / di akhir url
      $url = filter_var($url, FILTER_SANITIZE_URL);//membersihkan url untuk menghindari malicious intent
      $url = explode("/",$url);//memecah bagian url yang dipisah pakai "/" menjadi array
      return $url;
    }
  }

}

?>