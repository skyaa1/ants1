<?php


  class Topic_model extends CI_Model{
     function __construct(){
       parent::__construct();
     }

  function get(){
       return $this->db->query("select * FROM topic")->result();

     }

     function gets($id){
       $this->db->select('id');
       $this->db->select('title');
       $this->db->select('description');
       $this->db->select('UNIX_TIMESTAMP(created) AS created');
          return $this->db->get_where('topic', array('id'=>$id))->row();
        }
      }
 ?>
