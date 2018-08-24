<?php

/*
* Class: Upload
* uploads files to uploads direcotry
*/

class Upload {

  private $allowedExts;
  private $maxSize;
  private $file;
  private $uploadsDirectory;
  private $fileUrl;
  private $filenames = array();

  function __construct($file, $allowedExts, $uploadsDirectory, $maxSize) {
    if (is_array($allowedExts) AND is_int($maxSize)) {
      $this->file = $file;
      $this->allowedExts = $allowedExts;
      $this->maxSize = $maxSize;
      $this->uploadsDirectory = $uploadsDirectory;
    } else {
      throw new Exception("File extensions must be in an array and max size value must be intger value.");
    }
  }

  function uploadFiles() {
    $file = $this->file;
    $allowedExts = $this->allowedExts;
    $maxsize = $this->maxSize;
    $uploadsDir = $this->uploadsDirectory;
    //        print_r($file);
    //        for ($i = 0; $i < count($file); $i++) {
    $errors = array();
    //            print_r($_FILES);
    $filename = $file['name'];
    //             print_r($filename);
    $fileex = explode('.', $filename);
    $fileext = strtolower(array_pop($fileex));
    // $fileext = $fileex[1];
    $filesize = $file['size'];
    $filetmpname = $file['tmp_name'];
    // print_r($fileext);
    if (in_array($fileext, $allowedExts) === FALSE) {
      $errors[] = "Extension is not allowed!";
    }

    if ($filesize > $maxsize) {
      $errors[] = "File Size must be less than {$maxsize} KB!";
    }

    if (empty($errors)) {
      try {
        $random = rand(0, 9999);
        $this->fileUrl = $random . "_" . date("d-m-Y") . "_" . $filename;
        $destination = $uploadsDir . $random . "_" . date("d-m-Y") . "_" . $filename;
        if (move_uploaded_file($filetmpname, $destination)) {
          $this->filenames[] = $this->fileUrl;
        }  else {
          echo 'erre';
        }

      } catch (Exception $exc) {
        echo $exc->getTraceAsString();
      }
    } else {
      foreach ($errors as $error) {
        throw new Exception($error);
      }
    }
    //        } //end FOR loop

    return TRUE;
  }

  function getFileUrl() {
    return $this->fileUrl;
  }

  function getFilesNames() {
    return $this->filenames;
  }

}
