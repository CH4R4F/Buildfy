<?php
  class Page {
    private $db;
    
    public function __construct() {
      $this->db = new DB();
    }

    // insert new page
    public function newPage($name, $owner) {
      $query = "INSERT INTO pages (page_name, page_owner) VALUES (:page_name, :page_owner)";
      $this->db->query($query);
      // bind values
      $this->db->bind(':page_name', $name);
      $this->db->bind(':page_owner', $owner);
      // execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
  }