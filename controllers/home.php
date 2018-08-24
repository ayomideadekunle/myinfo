<?php

/**
 *
 */
class Home extends Controller
{

  function __construct()
  {
    parent::__construct();
    $this->loadModel("index");
  }

  public function index(){
    $this->view->infos = $this->model->my_info();
    $this->view->technicalskills = $this->model->getskillsbytechnical();
    $this->view->profskills = $this->model->getskillsbyprofessional();
    $this->view->projects = $this->model->projects();
    $this->view->work_experiences = $this->model->work_experiences();
    $this->view->education_details = $this->model->education_details();

    $this->view->title = "Ayomide Personal Website";
    $this->view->render("user-page");
  }
}
