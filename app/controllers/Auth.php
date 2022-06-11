<?php
  class Auth extends Controller {
    public function index() {
      $data = [
        'title' => '404 | Page Not Found',
      ];
      $this->view('404', $data);
    }

    public function login() {
      $client = new Google_Client();
      $client->setClientId(GOOGLE_CLIENT_ID);
      $client->setClientSecret(GOOGLE_CLIENT_SECRET);
      $client->setRedirectUri(GOOGLE_LOGIN_URL);
      $client->addScope("email");
      $client->addScope("profile");

      // initialize model
      $user = $this->model('User');

      // errors

      $data = [
        'title' => 'Login | Buildfy',
        'authUrl' => $client->createAuthUrl(),
      ];
      // listen for data from google
      if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token['access_token']);

        // get profile info
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        // check if user exists and redirect to dashboard page
        if($user->googleAuth($google_account_info->email)) {
          redirect('dashboard');
        } else {
          $data['error'] = 'Google account not registered';
        }
      }

      // success request
      if(isset($_GET['success']) && $_GET['success'] == 'true') {
        $data['success'] = true;
      } else {
        $data['success'] = false;
      }

      // check for post request
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = trim($_POST['user_email']);
        $password = trim($_POST['user_password']);

        if($user->login($email, $password)) {
          redirect('dashboard');
        } else {
          $data['error'] = 'Email or password is incorrect';
        }
      }
      $this->view('login', $data);
    }

    public function register() {
      // initialize google API
      $client = new Google_Client();
      $client->setClientId(GOOGLE_CLIENT_ID);
      $client->setClientSecret(GOOGLE_CLIENT_SECRET);
      $client->setRedirectUri(GOOGLE_REGISTER_URL);
      $client->addScope("email");
      $client->addScope("profile");
      // initialize User Model
      $user = $this->model('User');

      // initialize data array
      $data = [
        'title' => 'Register | Buildfy',
        'authUrl' => $client->createAuthUrl(),
      ];
      // listen for getting data from google
      if(isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token['access_token']);

        // get profile info
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        
        // check if user is already registered
        if($user->getUserByEmail($google_account_info->email)) {
          $data['error'] = 'User already registered';
        } else {
          // register user
          $user->googleRegister($google_account_info);
          // redirect to dashboard
          redirect('dashboard');
        }
      }

      // listen for submitng register form
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $post = filter_var_array($_POST, FILTER_SANITIZE_STRING);

        $post['name'] = trim($post['name']);
        $post['email'] = trim($post['email']);
        $post['password'] = trim($post['password']);

        if ($user->register($post)) {
          redirect('auth/login?success=true');
        } else {
          $data['error'] = 'Something went wrong';
        }
      }
      $this->view('register', $data);
    }
  }