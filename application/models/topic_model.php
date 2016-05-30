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

function write($name, $description){
     $this->db->set('created', 'now()' ,FALSE );
     $this->db->insert('topic', array(
      'title'=>$name ,
      'description'=>$description ,


  ));
      return $this->db->insert_id();
  }
function delete($delete){
      $this->db->delete('topic', array('id'=>$delete));

  }

function update($update){
  return $this->db->get_where('topic', array('id'=>$update))->row();

}

function updates($update_change,$update_changes,$update_changess){

   $data = array('description'=>$update_change,'title'=>$update_changess);
   $where = "id = $update_changes";
    $this->db->update('topic', $data, $where);

}

function membership(){
     return $this->db->query("select * FROM user")->result();

  }

function is_membership($email, $password){
   $this->db->set('created' ,'now()' , false);
   $this->db->insert('user' ,array(
      'email'=>$email ,
      'password'=>$password
   ));
  
}

   }



 ?>
