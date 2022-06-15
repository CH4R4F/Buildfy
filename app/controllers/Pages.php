<?php
  class Pages extends Controller {
    public function __construct() {
      // check if user is not logged in
      checkNoSession();
    }
    // for pages/
    public function index() {
      echo "Hi";
    }
    // for pages/new
    public function new() {
      $data = [
        'title' => 'Buildfy || Create Page',
        'active' => ''
      ];

      $this->view('pages', $data);
    }
    // for pages/editor/$page
    public function editor($page = null) {
      if(empty($page) || $page == null) {
        redirect('pages/new');
        die();
      } else if(!file_exists('./preview/'.$_SESSION['user_data']['user_root']. '/'.$page)) {
        redirect('Error404');
        die();
      }
      $data = [
        'title' => "Buildfy || $page",
        'name' => $page,
      ];
      $this->view("editor/index", $data);
    }
  }