<?php
  class Template {
    private $db;
      
    public function __construct() {
      $this->db = new DB();
    }
    public function getTemplates($category) {
      $query = "SELECT * FROM templates WHERE template_category = :template_category";
      $this->db->query($query);
      // bind values
      $this->db->bind(':template_category', $category);
      // execute
      $rows = $this->db->resultSet();
      return $rows;
    }
  }