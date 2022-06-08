<?php
  class Auth extends Controller {
    public function index() {
      $data = [
        'title' => '404 | Page Not Found',
      ];
      $this->view('404', $data);
    }

    public function login() {
      $data = [
        'title' => 'Login | Buildfy',
      ];
      $this->view('login', $data);
    }
  }