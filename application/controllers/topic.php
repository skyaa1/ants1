<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {

  function __construct(){
     parent::__construct();

     $this->load->database();
     $this->load->model('topic_model');
  }


public function index(){


  $data = $this->topic_model->gets();
  $this->load->view('head');
  $this->load->view('topic_list', array('topics1'=>$data));
  $this->load->view('main');
  $this->load->view('footer');
}
public function get($id1){

  $data = $this->topic_model->gets();
  $data1 = $this->topic_model->get($id1);
  $this->load->view('head');
  $this->load->view('topic_list', array('topics1'=>$data));
  $this->load->helper(array('url', 'HTML', 'korean'));
  $this->load->view('topic', array('topics2'=>$data1));
  $this->load->view('footer');

}

}
?>
