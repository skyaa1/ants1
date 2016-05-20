<?php
 defined('BASEPATH')OR exit('NO direct script access allowed');

 class auth extends MY_Controller {
   function __construct(){
     parent::__construct();
     $this->load->database();
     $this->load->model('topic_model');

   }
   function login(){
     $this->_head();

     $this->load->view('login');


     $this->_footer();



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
      $this->session->set_flashdata('message', '로그인 실패');
       $this->load->helper('url');
       redirect('/auth/login');



     }
   }

   function membership(){
     $this->_head();

     $this->load->view('membership');
     $this->_footer();


   }

   function user_membership(){
     $this->_head();

    $id = $this->input->post('id');
    $password = $this->input->post('password');
    $email = $this->input->post('email');
    echo($id);
    $this->_footer();


   }

 }


 ?>
