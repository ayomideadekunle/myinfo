<?php

/**
*
*/
class Index extends Controller
{

  function __construct()
  {
    parent::__construct();
    // $this->loadModel("index");
  }

  public function index(){
    Session::init();
    if(isset($_SESSION["logged_in"])){
    $this->view->title = "Homepage";

    $this->view->infos = $this->model->my_info();
    $this->view->render("admin/navigation/header");
    $this->view->render("admin/navigation/topnav");
    $this->view->render("admin/about/index");
    $this->view->render("admin/navigation/footer");
    } else {
      $this->view->render("admin/login");
    }
  }

  public function home(){
    $this->view->infos = $this->model->my_info();
    $this->view->technicalskills = $this->model->getskillsbytechnical();
    $this->view->profskills = $this->model->getskillsbyprofessional();
    $this->view->projects = $this->model->projects();
    $this->view->work_experiences = $this->model->work_experiences();
    $this->view->education_details = $this->model->education_details();

    $this->view->title = "Ayomide Personal Website";
    $this->view->render("user-page");
  }

  public function skills(){
    Session::init();
    if(isset($_SESSION["logged_in"])){
    $this->view->title = "Skills";

    $this->view->skill_cats = $this->model->skill_cats();
    $this->view->skills = $this->model->skills();
    $this->view->render("admin/navigation/header");
    $this->view->render("admin/navigation/topnav");
    $this->view->render("admin/skills/index");
    $this->view->render("admin/navigation/footer");
    } else {
      $this->view->render("admin/login");
    }
  }

  public function projects(){
    Session::init();
    if(isset($_SESSION["logged_in"])){
    $this->view->title = "Projects";

    $this->view->projects = $this->model->projects();
    $this->view->render("admin/navigation/header");
    $this->view->render("admin/navigation/topnav");
    $this->view->render("admin/projects/index");
    $this->view->render("admin/navigation/footer");
    } else {
      $this->view->render("admin/login");
    }
  }

  public function experience(){
    Session::init();
    if(isset($_SESSION["logged_in"])){
    $this->view->title = "Experience";

    $this->view->work_experiences = $this->model->work_experiences();
    $this->view->render("admin/navigation/header");
    $this->view->render("admin/navigation/topnav");
    $this->view->render("admin/experience/index");
    $this->view->render("admin/navigation/footer");
    } else {
      $this->view->render("admin/login");
    }
  }

  public function education(){
    Session::init();
    if(isset($_SESSION["logged_in"])){
    $this->view->title = "Education";

    $this->view->education_details = $this->model->education_details();
    $this->view->render("admin/navigation/header");
    $this->view->render("admin/navigation/topnav");
    $this->view->render("admin/education/index");
    $this->view->render("admin/navigation/footer");
    } else {
      $this->view->render("admin/login");
    }
  }

  public function add_skill(){
    $this->model->skill_add();
    header("Location: " .URL. "index/skills");
  }

  public function add_my_info(){
    $this->model->about_me();
    header("Location: " .URL. "index");
  }

  public function add_edu_background(){
    $this->model->add_edu_background();
    header("Location: " .URL. "index/education");
  }

  public function add_project(){
    $this->model->project_add();
    header("Location: " .URL. "index/projects");
  }

  public function add_experience(){
    $this->model->experience_add();
    header("Location: " .URL. "index/experience");
  }

  public function edit_skill($id){
    $this->model->update_skill($id);
    header("Location: " .URL. "index/skills");
  }

  public function edit_project($id){
    $this->model->update_project($id);
    header("Location: " .URL. "index/projects");
  }

  public function edit_my_info($id){
    $this->model->update_my_info($id);
    header("Location: " .URL. "index");
  }

  public function edit_info($id){
    $this->model->update_about_me($id);
    header("Location: " .URL. "index");
  }

  public function edit_experience($id){
    $this->model->update_experience($id);
    header("Location: " .URL. "index/experience");
  }

  public function edit_edu_bgd($id){
    $this->model->update_edu_bdg($id);
    header("Location: " .URL. "index/education");
  }

  public function logout() {
      Session::init();
      @session_destroy();
      header("Location: http://localhost/personal/");
  }
}
