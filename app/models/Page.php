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

    public function clonePage($name, $owner, $template) {
      $query = "SELECT * FROM templates WHERE template_id = :template_id";
      $this->db->query($query);
      // bind values
      $this->db->bind(':template_id', $template);
      // execute
      $row = $this->db->single();
      if($this->db->rowCount() > 0) {
        $query = "INSERT INTO pages (page_name, page_assets, page_components, page_css, page_html, page_styles, page_owner) VALUES (:page_name, :page_assets, :page_components, :page_css, :page_html, :page_styles, :page_owner)";
        $this->db->query($query);
        // bind values
        $this->db->bind(':page_name', $name);
        $this->db->bind(':page_assets', $row['template_assets']);
        $this->db->bind(':page_components', $row['template_components']);
        $this->db->bind(':page_css', $row['template_css']);
        $this->db->bind(':page_html', $row['template_html']);
        $this->db->bind(':page_styles', $row['template_styles']);
        $this->db->bind(':page_owner', $owner);
        // execute
        if($this->db->execute()) {
          return true;
        } else {
          return false;
        }
      }
      return false;
    }

    public function updatePage($page, $data) {
      header('Content-Type: application/json', true);
      $assets = $data['gjs-assets'];
      $assets=json_encode($assets);
      $components = $data['gjs-components'];
      $components=json_encode($components);
      $css = $data['gjs-css'];
      $css = json_encode($css);
      $html = $data['gjs-html'];
      $html= json_encode($html);
      $styles = $data['gjs-styles'];
      $styles = json_encode($styles);
      // $assets = $data['gjs-assets'];
      // $assets=json_encode($assets);
      // $components = $data['gjs-components'];
      // $components=json_encode($components);
      // $css = $data['gjs-css'];
      // $css = json_encode($css);
      // $html = $data['gjs-html'];
      // $html= json_encode($html);
      // $styles = $data['gjs-styles'];
      // $styles = json_encode($styles);
      

      $query = "UPDATE pages SET page_assets = :assets, page_components = :components, page_css = :css, page_html = :html, page_styles = :styles WHERE page_name = :page_name";
      $this->db->query($query);
      // bind values
      $this->db->bind(':assets', $assets);
      $this->db->bind(':components', $components);
      $this->db->bind(':css', $css);
      $this->db->bind(':html', $html);
      $this->db->bind(':styles', $styles);
      $this->db->bind(':page_name', $page);
      // execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getPage($page) {
      header('Content-Type: application/json', true);
      $response = [];
      $query = "SELECT * FROM pages WHERE page_name = :page_name";
      $this->db->query($query);
      // bind values
      $this->db->bind(':page_name', $page);
      // execute
      $row = $this->db->single();
      if($this->db->rowCount() > 0) {
        $response['id'] = $row['page_id'];
        $response['gjs-assets'] = $row['page_assets'];
        $response['gjs-components'] = $row['page_components'];
        $response['gjs-css'] = $row['page_css'];
        $response['gjs-html'] = $row['page_html'];
        $response['gjs-styles'] = $row['page_styles'];
        $json_response = json_encode($response, true);
        $escap = function($str) {
          return preg_replace('/\\\\/', '', $str);
        };
        return $json_response;
      } else {
        return false;
      }
    }
  }