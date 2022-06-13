<?php
function checkNoSession() {
  if(!isset($_SESSION['user_data'])) {
    redirect('error404');
    die();
  }
}

function checkSession() {
  if(isset($_SESSION['user_data'])) {
    redirect('dashboard');
    die();
  }
}