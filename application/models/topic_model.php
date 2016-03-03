<?php
  class Topic_model extends CI_Model {
    function construct(){
      parent::__construct();
    }
    public function gets(){
    return  $this->db->query('SELECT * FROM topic')->result();
    }

    public function get($as){
       $this->db->select('id');
        $this->db->select('title');
        $this->db->select('description');
        $this->db->select('UNIX_TIMESTAMP(created) AS created');
    return $this->db->get_where('topic', array('id'=>$as))->row();
    }
  }
 ?>
