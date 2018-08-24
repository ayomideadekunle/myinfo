<?php

class Login_Model extends Model {

  function __construt() {
    parent::__construct();
  }

  public function adminLogin() {
    $username = $_POST['email'];
    $password = md5($_POST['password']);

    $val = $this->db->select("select * from myinfo");
    foreach ($val as $key => $value) {
      if ($username == $value['email'] && $password == $value['password']) {
        $name = "connected";
        @session_start();

        $_SESSION["id"] = $value["id"];
        $_SESSION["logged_in"] = "yeah";
        $_SESSION["role"] = $value["user_type"];
        $_SESSION["fullname"] = $value["fullname"];
        $_SESSION["username"] = $value["username"];
        $_SESSION["dp"] = $value["pix"];

        echo $name;

        return FALSE;
      }
    }
    echo "0";
  }

}
