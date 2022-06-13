<?php
  class Pages extends Controller {
    public function __construct() {
      // check if user is not logged in
      checkNoSession();
    }

    public function index() {
      echo "Hi";
    }

    public function new() {
      $data = [
        'title' => 'Buildfy || Create Page',
        'active' => ''
      ];

      $this->view('pages', $data);
    }

    public function editor($page = null) {
      
    }
  }