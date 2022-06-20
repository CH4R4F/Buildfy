<?php
  class Dashboard extends Controller {
    public function __construct() {
      // check if user is not logged in
      checkNoSession();
    }

    public function index() {
      $pages = $this->model('Page');
      $id = $_SESSION['user_data']['user_id'];
      $data = [
        'title' => 'Dashboard',
        'active' => 'dashboard',
      ];
      if($userPages = $pages->getUserPages($id)) {
        $data['userPages'] = $userPages;
      } 
      $this->view('dashboard', $data);
    }
  }