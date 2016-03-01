<?php
  class topic_model extends CI_Model {
    function construct(){
      parent::__construct();
    }
    public function gets(){
    return  $this->db->query('SELECT * FROM topic')->result();
    }
  }
 ?>
