<?php 
  class Flasher {
    public static function setFlash($msg, $action, $type) {
      $_SESSION["flash_msg"] = [
        'msg' => $msg,
        'action' => $action,
        'type' => $type
      ];
    }
    public static function sendFlash(){
      if (isset($_SESSION["flash_msg"])) {
        echo 
        '<div class="alert ' . $_SESSION['flash_msg']['type']
         . ' alert-dismissible fade show" role="alert">' . $_SESSION['flash_msg']['action']
          . 'data ' . $_SESSION['flash_msg']['msg']
           . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      }
      unset($_SESSION['flash_msg']);
    }
  }
?>