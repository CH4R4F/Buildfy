<?php
  class Router {
    // default controller
    protected $controller = 'Home';
    // default method
    protected $method = 'index';
    // default params
    protected $params = [];

    public function __construct() {
      $url = $this->getUrl();
      // Get cotroller name
      $linkController = ucwords(@$url[0]) ?? "Home";
      if(file_exists("../app/controllers/$linkController.php")) {
        $this->controller = $linkController;
        unset($url[0]);
      }

      require_once("../app/controllers/$this->controller.php");
      $this->controller = new $this->controller;

      if(isset($url[1])) {
        if(method_exists($this->controller, $url[1])) {
          $this->method = $url[1];
          unset($url[1]);
        }
      }

      $this->params = $url ? array_values($url) : [];
      call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function getUrl() {
      if(isset($_GET['page'])) {
        $url = rtrim($_GET['page'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return explode('/', $url);
      }
    }
  }