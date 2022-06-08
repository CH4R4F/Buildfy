<?php
  class Home extends Controller {
    public function index() {
      $data = [
        'title' => 'Buildfy | Home',
      ];
      $this->view('home', $data);
    }
  }