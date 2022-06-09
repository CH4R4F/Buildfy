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

      if(isset($_GET['success']) && $_GET['success'] == 'true') {
        $data['success'] = true;
      } else {
        $data['success'] = false;
      }

      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = trim($_POST['user_email']);
        $password = trim($_POST['user_password']);

        $user = $this->model('User');
        if($user->login($email, $password)) {
          echo "hooya";
        } else {
          echo "nope";  
        }
      }
      $this->view('login', $data);
    }

    public function register() {

      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $post = filter_var_array($_POST, FILTER_SANITIZE_STRING);

        $post['name'] = trim($post['name']);
        $post['email'] = trim($post['email']);
        $post['password'] = trim($post['password']);

        $user = $this->model('User');
        if ($user->register($post)) {
          redirect('auth/login?success=true');
        } else {
         echo "error"; 
        }
      }

      $data = [
        'title' => 'Register | Buildfy',
      ];
      $this->view('register', $data);
    }
  }