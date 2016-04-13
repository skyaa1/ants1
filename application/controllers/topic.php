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
  $this->load->view
  ('topic', array('topics'=>$data1));
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
    echo "성공";
  }



  $this->load->view('footer');
}

 function _head(){
   $data = $this->topic_model->get();
   $this->load->view('head');
   $this->load->view('topic_list', array('topic'=>$data));
 }

}
?>
