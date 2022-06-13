<?php
  class Dashboard extends Controller {
    public function __construct() {
      // check if user is not logged in
      checkNoSession();
    }

    public function index() {
      $data = [
        'title' => 'Dashboard',
        'active' => 'dashboard',
      ];
      $this->view('dashboard', $data);
    }
  }