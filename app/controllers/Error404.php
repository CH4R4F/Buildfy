<?php
  class Error404 extends Controller {
      // public function __construct() {
      //   // check if user is not logged in
      //   checkNoSession();
      // }

    public function index() {
      $data = [
        'title' => '404',
      ];
      $this->view('404', $data);
    }
  }