<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {


public function index(){

  $this->load->database();
  $this->load->model('topic_model');
  $data = $this->topic_model->gets();
    $this->load->view('head');
  $this->load->view('topic');
    $this->load->view('footer');
}
public function main($id1){
  $this->load->view('head');

  $this->load->view('main', array('id'=>$id1));
  $this->load->view('footer');

}

}
?>
