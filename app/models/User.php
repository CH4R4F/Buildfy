<?php
  class User {
    private $db;
    
    public function __construct() {
      $this->db = new DB();
    }
    // register user
    public function register($data) {
      $folderCode = bin2hex(random_bytes(10));
      $this->db->query("INSERT INTO users (user_name, user_email, user_password, user_root) VALUES (:user_name, :user_email, :user_password, :user_root)");
      // bind values
      $this->db->bind(':user_name', $data['user_name']);
      $this->db->bind(':user_email', $data['user_email']);
      $this->db->bind(':user_password', $data['user_password']);
      $this->db->bind(':user_root', $folderCode);
      // execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    // login user
    public function login($email, $password) {
      $this->db->query("SELECT * FROM users WHERE user_email = :email");
      $this->db->bind(':email', $email);
      if($row = $this->db->single()) {
        if($password == $row['user_password']) {
          $this->createSession($row);
          return $row;
        } else {
          return false;
        }
      } else {
        echo "email invalid";
      }
    }

    // get user by email
    public function getUserByEmail($email) {
      $this->db->query("SELECT * FROM users WHERE user_email = :email");
      $this->db->bind(':email', $email);
      $row = $this->db->single();
      if($this->db->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }

    protected function createSession($row) {
      $_SESSION['is_logged_in'] = true;
      $_SESSION['user_data'] = array(
        'user_id' => $row['user_id'],
        'user_name' => $row['user_name'],
        'user_email' => $row['user_email'],
        'user_root' => $row['user_root'],
      );
    }
  }