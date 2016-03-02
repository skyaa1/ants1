<?php
  class Topic_model extends CI_Model {
    function construct(){
      parent::__construct();
    }
    public function gets(){
    return  $this->db->query('SELECT * FROM topic')->result();
    }

    public function get($as){

    return $this->db->get_where('topic', array('id'=>$as))->row();
    }
  }
 ?>
