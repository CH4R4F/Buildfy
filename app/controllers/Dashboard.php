<?php
  class Dashboard extends Controller {
    public function index() {
      $data = [
        'title' => 'Dashboard',
        'active' => 'dashboard',
      ];
      $this->view('dashboard', $data);
    }
  }