<?php
  class Api extends Controller {

    public function createProject($name = null) {
      if(empty($name) || $name == null) {
        // return a message that the project name is required;
        echo "empty";
        exit();
      } else {
        // check if user folder exist
        if(!file_exists('./preview/'.$_SESSION['user_data']['user_root'])) {
          mkdir('./preview/'.$_SESSION['user_data']['user_root']);
        }
        $user_folder = './preview/'.$_SESSION['user_data']['user_root'];
        // check if project folder already exist with the same name
        if(file_exists($user_folder . '/' . $name)) {
          // return a message that the project name already exist;
          echo "exist";
          exit();
        } else {
          // create project folder
          mkdir($user_folder . '/' . $name);
        }
      } 
      
      $pageModel = $this->model('Page');
      if(!$pageModel->newPage($name, $_SESSION['user_data']['user_id'])) {
        echo 'error';
        exit();
      }
      echo 'success';
    }
  }