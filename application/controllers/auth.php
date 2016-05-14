<?php
 defined('BASEPATH')OR exit('NO direct script access allowed');

 class auth extends CI_Controller {
   function __construct(){
     parent::__construct();
     $this->load->database();
     $this->load->model('topic_model');

   }
   function login(){
     $this->load->config('opentutorials');
     $data = $this->topic_model->get();
     $this->load->view('head');
     $this->load->view('login');
     $id = $this->input->post('id');

     $this->load->view('footer');



   }

   function authentication(){
    $id = $this->config->item('authentication');


     if($id['id'] == $this->input->post('id') &&
        $id['password'] == $this->input->post('password')
     ){
       $this->session->set_userdata('is_login', true);
       $this->load->helper('url');
       redirect('/topic/add');
     } else{
       echo '틀림';
     }
   }
 }


 ?>
