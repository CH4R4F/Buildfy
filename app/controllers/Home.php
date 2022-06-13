<?php
  class Home extends Controller {
    public function __construct() {
      // check if user is logged in
      checkSession();
    }
    public function index() {
      $data = [
        'title' => 'Buildfy | Home',
      ];
      $this->view('home', $data);
    }
  }