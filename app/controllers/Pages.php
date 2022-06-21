<?php
  class Pages extends Controller {
    public function __construct() {
      // check if user is not logged in
      checkNoSession();
    }
    // for pages/
    public function index() {
      $this->view('Error404');
      die();
    }
    // for pages/new
    public function new() {
      $data = [
        'title' => 'Buildfy || Create Page',
        'active' => ''
      ];
      $templateModel = $this->model('Template');
      $templates = $templateModel->getTemplates('free');
      $data['free_templates'] = $templates;
      $this->view('pages', $data);
    }

    // for pages/editor/$page
    public function editor($page = null) {
      // if href is pages/editor/
      $pageModel = $this->model('Page');
      if(empty($page) || $page == null) {
        redirect('pages/new');
        die();
        // if href is pages/editor/page-name and page-name is not exist
      } else if(!file_exists('./preview/'.$_SESSION['user_data']['user_root']. '/'.$page)) {
        redirect('Error404');
        die();
      }
      $data = [
        'title' => "Buildfy || $page",
        'name' => $page,
      ];
      $_SESSION['project_name'] = $page;
      $this->view("editor/index", $data);
    }
  }