<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function login() {
        $this->model->adminLogin();
        header("Location: " . URL. "index");
    }

    function index(){
      $this->view->render("navigation/header");
      $this->view->render("register");
      $this->view->render("navigation/footer");
    }

}
