<?php
  class Topic_model1 extends CI_Model {
    function construct(){
      parent::__construct();
    }
    public function gets($as){

    return $this->db->get_where('topic', array('id'=>$as))->row();
    }
  }
 ?>
