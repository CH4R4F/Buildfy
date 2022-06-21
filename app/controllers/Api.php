<?php
  class Api extends Controller {
    public function index() {
      echo "Hi";
    }

    public function createProject($name = null, $template = null) {
      $page = $this->model('Page');
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
      if($template == null) {
        if($page->newPage($name, $_SESSION['user_data']['user_id'])) {
          echo $name;
        } else {
          echo "error";
          exit();
        }
      } else {
        if($page->clonePage($name, $_SESSION['user_data']['user_id'], $template)) {
          echo $name;
        } else {
          return 'error';
          exit();
        }
      }
    }

    public function saveProject($pageName) {
      header('Content-Type: application/json', true);
      $data = json_decode(file_get_contents("php://input"), true);
      $page = $this->model('Page');
      if($page->updatePage($pageName, $data)) {
        echo json_encode(array('status' => 'success'));
      } else {
        echo "error";
      }
    }

    public function loadProject($pageName) {
      header('Content-Type: application/json', true);
      $page = $this->model('Page');
      $row = $page->getPage($pageName);
      if($row) {
        echo $row;
      } else {
        echo "error";
      }
    }

    public function deleteProject($pageName) {
      $page = $this->model('Page');
      $data = [
        'title' => 'Dashboard',
        'active' => 'dashboard',
      ];
      if($page->deletePage($pageName)) {
        $data['success'] = 'Project deleted successfully.';
        redirect('dashboard');
      } else {
        $data['error'] = 'Project could not be deleted.';
        redirect('dashboard');
        die();
      }
    }
  }