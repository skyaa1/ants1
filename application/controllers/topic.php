<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {

  function __construct(){
     parent::__construct();

     $this->load->database();
     $this->load->model('topic_model');

  }


public function index(){

  $this->_add();

  $this->load->view('footer');
}
public function get($id1){

  $data1 = $this->topic_model->get($id1);

  $this->_add();

  $this->load->helper(array('url', 'HTML', 'korean'));
  $this->load->view('topic', array('topics2'=>$data1));
  $this->load->view('footer');

}
 public function add(){

   $this->_add();

  echo $this->input->post('name');
  echo $this->input->post('description');

   $this->load->view('add');
   $this->load->view('footer');
}

function _add(){
  $data = $this->topic_model->gets();
  $this->load->view('head');
  $this->load->view('topic_list', array('topics1'=>$data));
}

}
?>
