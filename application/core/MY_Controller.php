 <?php
  class MY_Controller extends CI_Controller {
     function __construct()
     {

       parent::__construct();
     }
     function _footer(){
       $this->load->view('footer');
     }

     function _head(){




           $this->load->config('opentutorials');
           $this->load->view('head');
     }

     function _sidebar(){

           $data = $this->topic_model->get();
           $this->load->view('topic_list', array('topic'=>$data));
    }



  }

  ?>
