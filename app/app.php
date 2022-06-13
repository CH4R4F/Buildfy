<?php
  session_start();
  // require config file
  require_once('config/config.php');

  // require sessionCheker
  require_once('helpers/sessionCheck.php');

  // require helpers file
  require_once('helpers/redirect.php');

  // autoload classes
  spl_autoload_register(function($className) {
    require_once('lib/' . $className . '.php');
  });
  