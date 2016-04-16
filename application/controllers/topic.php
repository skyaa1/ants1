<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {

  function __construct(){
     parent::__construct();

      $this->load->database();
      $this->load->model('topic_model');


  }

public function index(){



      $this->_head();
      $this->load->view('footer');


}

public function get($id){

      $this->_head();

      $data1 = $this->topic_model->gets($id);

      $this->load->helper(array('url','html','korean'));
      $this->load->view('topic', array('topics'=>$data1, 'id'=>$id));
      $this->load->view('footer');

}

public function add(){


      $this->_head();

      $this->load->library('form_validation');
      $this->form_validation->set_rules('name', '제목', 'required');
      $this->form_validation->set_rules('description', '내용', 'required');
   if ($this->form_validation->run() == FALSE){
      $this->load->view('add');

 } else{
      $name = $this->input->post('name');
      $description = $this->input->post('description');
      $insert_id  = $this->topic_model->write($name, $description);
      $this->load->helper('url');
      redirect('/topic/get/'.$insert_id);
  }
       $this->load->view('footer');
}

function delete(){
      $this->_head();
      $delete = $this->input->post('delete');
       $this->topic_model->delete($delete);

      $this->load->view('footer');
      $this->load->helper('url');
      redirect('/topic');

}

function update(){
      $this->_head();
      $this->load->helper('url');
      $update  = $this->input->post('update');
      $update_id = $this->topic_model->update($update);
      $this->load->view('topic_update', array('update'=>$update_id));


      $this->load->view('footer');

}

function updates(){
      $this->_head();
      $update_changess = $this->input->post('title');
      $update_change = $this->input->post('description');
      $update_changes = $this->input->post('id');
      $this->topic_model->updates($update_change,$update_changes,$update_changess);

      $this->load->view('footer');
      $this->load->helper('url');
      redirect('/topic/get/'.$update_changes);

}



 function _head(){
       $data = $this->topic_model->get();
       $this->load->view('head');
       $this->load->view('topic_list', array('topic'=>$data));
 }

}
?>
