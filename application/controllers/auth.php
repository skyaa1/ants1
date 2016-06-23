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

    $id = $this->topic_model->membership(array('email'=>$this->input->post('email')));



     if($id->email === $this->input->post('email') &&
     password_verify($this->input->post('password'), $id->password)
     ){

       $this->session->set_flashdata('message', '로그인됐당');
       $this->session->set_userdata('is_login', true);
       $this->load->helper('url');
       redirect('/topic/get/42');

     } else{

         $this->session->set_flashdata('message', '누구냐 넌');
         $this->load->helper('url');
         redirect('/auth/login');
   }

}

   function membership(){
     $this->_head();
     $this->load->model('topic_model');
     $id = $this->topic_model->membership(array('email'=>$this->input->post('email')));
     $e = 0;


     if($this->input->post('email')){
       $password1 = $this->input->post('password1');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

       $this->load->view('membership', array('email'=> $email));
       if(!function_exists('password_hash')){
         $this->load->helper('password');

       }
        $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        $hash1 = password_hash($this->input->post('password1'), PASSWORD_BCRYPT);




       $this->load->helper('url');
       if(! empty ($id)){
         if($id->email == $email){
           $e = 1;
       ?>
          <script>
          alert("아이디가 중복되었습니다 다른 아이디로 시도하세요");

           </script>


<?php


          }
        }

          if(! ($password === $password1 ) ){

           ?>
             <script>
               alert('패스워드가 일치하지 않습니다');
             </script>
<?php
        } else if(empty($password)){
           ?>
             <script>
               alert('패스워드를 입력해주세요');
             </script>
<?php
        } else if(! ($e == 1)){

           $this->topic_model->is_membership($email, $hash);
           redirect('/topic/get/42');
          ?>
            <script>
              alert('가입성공! 당신의 통장에서 10,000,000원이 다른 통장으로 이체되었습니다 ');
            </script>
  <?php
        }

     }

     $this->load->view('membership');
       $this->_footer();

   }


 }


 ?>
