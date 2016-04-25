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
function upload_receive_ck(){
  // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
  $config['upload_path'] = './static/user';
  // git,jpg,png 파일만 업로드를 허용한다.
  $config['allowed_types'] = 'gif|jpg|png';
  // 허용되는 파일의 최대 사이즈
  $config['max_size'] = '10000';
  // 이미지인 경우 허용되는 최대 폭
  $config['max_width']  = '1024';
  // 이미지인 경우 허용되는 최대 높이
  $config['max_height']  = '768';
  $this->load->library('upload', $config);

  if (! $this->upload->do_upload("upload")){
    echo $this->upload->display_errors();
    echo"<script>alert('업로드에 실패했습니다 ".$this->upload->display_errors('','')."')</script>";

  }else {
    $CKEditorFuncNum = $this->input->get('CKEditorFuncNum');
    $data =  $this->upload->data();
    $filename = $data['file_name'];
    $url = '/static/user/'.$filename;
    echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction
    ('".$CKEditorFuncNum."', '".$url."', '전송이 완료 됐다냐')</script>";


  }

}

 function upload_receive(){
   // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
   $config['upload_path'] = './static/user';
   // git,jpg,png 파일만 업로드를 허용한다.
   $config['allowed_types'] = 'gif|jpg|png';
   // 허용되는 파일의 최대 사이즈
   $config['max_size'] = '10000';
   // 이미지인 경우 허용되는 최대 폭
   $config['max_width']  = '1024';
   // 이미지인 경우 허용되는 최대 높이
   $config['max_height']  = '768';
   $this->load->library('upload', $config);

   if (! $this->upload->do_upload("user_upload_file")){
     echo $this->upload->display_errors();

   }else {
     $data = array('upload_data'=> $this->upload->data());
     echo "성공";
     var_dump($data);
   }

 }


function upload_form(){
  $this->_head();
  $this->load->view('upload_form');
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
       $this->load->config('opentutorials');
       $data = $this->topic_model->get();
       $this->load->view('head');
       $this->load->view('topic_list', array('topic'=>$data));
 }

}
?>
