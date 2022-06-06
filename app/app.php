<?php
  // require config file
  require_once('config/config.php');

  // autoload classes
  spl_autoload_register(function($className) {
    require_once('lib/' . $className . '.php');
  });
  