<?php
require "Upload.php";
/**
*
*/
class Index_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function skill_add(){
    $this->db->insert('skills', array(
      'name' => $_POST['name'],
      'cat_id' => $_POST['cat_id']
    ));
  }

  public function update_skill($id){
    $data = array(
      "name" => $_POST["name"],
      "cat_id" => $_POST["cat_id"]
    );
    $this->db->update("skills", $data, "id=" .$id);
  }

  public function update_experience($id){
    $data = array(
      "start" => $_POST["start"],
      "end" => $_POST["end"],
      "company" => $_POST["company"],
      "jobrole" => $_POST["jobrole"],
      "responsibility" => $_POST["responsibility"]
    );
    $this->db->update("experience", $data, "id=" .$id);
  }

  public function update_edu_bdg($id){
    $data = array(
      "institution" => $_POST["institution"],
      "start" => $_POST["start"],
      "end" => $_POST["end"],
      "qualification" => $_POST["qualification"]
    );
    $this->db->update("education", $data, "id=" .$id);
  }

  public function add_edu_background(){
    $data = array(
      "institution" => $_POST["institution"],
      "start" => $_POST["start"],
      "end" => $_POST["end"],
      "qualification" => $_POST["qualification"]
    );
    $this->db->insert("education", $data);
  }

  public function experience_add(){
    $data = array(
      "start" => $_POST["start"],
      "end" => $_POST["end"],
      "company" => $_POST["company"],
      "jobrole" => $_POST["jobrole"],
      "responsibility" => $_POST["responsibility"]
    );
    $this->db->insert("experience", $data);
  }

  public function project_add(){
    if (!empty($_FILES['image']['name'][0])) {
      try {
        $file = $_FILES['image'];
        $allowedExts = array('jpg', 'png', 'gif', 'jpeg');
        $uploadsDirectory = UPLOADS;
        $maxSize = 4000000;
        $upload = new Upload($file, $allowedExts, $uploadsDirectory, $maxSize);
        $upload->uploadFiles();
        $_POST['image'] = $uploadsDirectory . $upload->getFileUrl();
      } catch (Exception $exc) {
        print_r($exc->getMessage());
      }
    } else {
      $_POST['image'] = URL . 'assets/users/images/close.png';
    }

    $data = array(
      "no" => $_POST["no"],
      "image" => $_POST["image"]
    );
    $this->db->insert("projects", $data);
    // print_r($data);
  }

  public function about_me()
  {
    // print_r($_FILES['cv']);
    if (!empty($_FILES['pix']['name'][0] && $_FILES['cv']['name'][0])) {
      try {
        $pix = $_FILES['pix'];
        $cv = $_FILES['cv'];

        $pixExts = array('jpg', 'png', 'gif', 'jpeg');
        $cvExts = array('pdf');
        // print_r($cvExts);
        $uploadsDirectory = UPLOADS;
        $maxSize = 4000000;
        $uploadpix = new Upload($pix, $pixExts, $uploadsDirectory, $maxSize);
        $uploadcv = new Upload($cv, $cvExts, $uploadsDirectory, $maxSize);
        $uploadpix->uploadFiles();
        $uploadcv->uploadFiles();
        $_POST['pix'] = $uploadsDirectory . $uploadpix->getFileUrl();
        $_POST['cv'] = $uploadsDirectory . $uploadcv->getFileUrl();
        // echo " ys" .$uploadsDirectory . $uploadcv->getFileUrl();
      } catch (Exception $exc) {
        print_r($exc->getMessage());
      }
    } else {
      $_POST['pix'] = URL . 'assets/images/close.png';
      $_POST['cv'] = URL . 'assets/images/close.png';
    }

    $userData = array(
      "fullname" => $_POST["fullname"],
      "email" => $_POST["email"],
      "age" => $_POST["age"],
      "phone" => $_POST["phone"],
      "website" => $_POST["website"],
      "address" => $_POST["address"],
      "jobrole" => $_POST["jobrole"],
      "objective" => $_POST["objective"],
      "summary" => $_POST["summary"],
      "experience" => $_POST["experience"],
      "password" => md5($_POST["password"]),
      "pix" => $_POST["pix"],
      "cv" => $_POST["cv"]
    );
    $this->db->insert("myinfo", $userData);
    // print_r($userData);
  }

  public function update_about_me($id)
  {
    if (!empty($_FILES['pix']['name'][0] && $_FILES['cv']['name'][0])) {
      try {
        $pix = $_FILES['pix'];
        $cv = $_FILES['cv'];

        $pixExts = array('jpg', 'png', 'gif', 'jpeg');
        $cvExts = array('pdf');
        // print_r($cvExts);
        $uploadsDirectory = UPLOADS;
        $maxSize = 4000000;
        $uploadpix = new Upload($pix, $pixExts, $uploadsDirectory, $maxSize);
        $uploadcv = new Upload($cv, $cvExts, $uploadsDirectory, $maxSize);
        $uploadpix->uploadFiles();
        $uploadcv->uploadFiles();
        $_POST['pix'] = $uploadsDirectory . $uploadpix->getFileUrl();
        $_POST['cv'] = $uploadsDirectory . $uploadcv->getFileUrl();
      } catch (Exception $exc) {
        print_r($exc->getMessage());
      }
    } else {
      $_POST['pix'] = URL . 'assets/images/close.png';
      $_POST['cv'] = URL . 'assets/images/close.png';
    }

    $userData = array(
      "fullname" => $_POST["fullname"],
      "email" => $_POST["email"],
      "age" => $_POST["age"],
      "phone" => $_POST["phone"],
      "website" => $_POST["website"],
      "address" => $_POST["address"],
      "jobrole" => $_POST["jobrole"],
      "objective" => $_POST["objective"],
      "summary" => $_POST["summary"],
      "experience" => $_POST["experience"],
      "password" => md5($_POST["password"]),
      "pix" => $_POST["pix"],
      "cv" => $_POST["cv"]
    );
    $this->db->update("myinfo", $userData, "id=" .$id);
  }

  // get skill cat info
  public function skills_category_info($id = '')
  {
    $param = array(
      ":catid" => $id,
    );
    $getinfo_query = $this->db->select("SELECT * FROM skill_category WHERE id = :catid", $param);
    return $getinfo_query;
  }

  public function getskillsbytechnical()
  {
    return $this->db->select("select * from skills where cat_id = 1");
  }

  public function getskillsbyprofessional()
  {
    return $this->db->select("select * from skills where cat_id = 2");
  }

  public function skill_cats(){
    return $this->db->select("select * from skill_category");
  }

  public function skills(){
    return $this->db->select("select * from skills");
  }

  public function education_details(){
    return $this->db->select("select * from education");
  }

  public function work_experiences(){
    return $this->db->select("select * from experience");
  }

  public function my_info(){
    return $this->db->select("select * from myinfo");
  }

  public function projects(){
    return $this->db->select("select * from projects");
  }
}
