<!DOCTYPE html>
 <html>
   <head>
    <style>
      body{
        padding-top: 60px;

      }
      .well{
        color:black;
      }
    </style>


     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link href="/static/lib/bootstrap/css/bootstrap.css"  rel="stylesheet" media="screen">
     <link href="/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  </head>

   <body>

    <?php
     if($this->session->flashdata('message')){
     ?>
     <script>
      alert('<?=$this->session->flashdata('message') ?>');
     </script>

       <?php
     }
     ?>

<div class="navbar navbar-fixed-top">
 <div class="navbar-inner">
   <div class="container">


      <a class="brand" style="color:green" href="/index.php/topic/get/42">ents dev.</a>


      <div class="nav-collapse collapse">
        <ul class="nav pull-right">
          <li>
            <?php
            if (!$this->session->userdata('is_login')) {
              ?>

           <div >
              <form class="" action="/index.php/auth/login" method="post">
                <input type="submit" class="btn btn-primary" name="login" value="로그인">
              </form>
           </div>
           <?php
           } else {
             ?>
             <div>
               <form class="" action="/index.php/topic/get/42" method="post">
                   <input type="submit" class="btn btn-primary" name="login" value="로그아웃">

               </form>
             </div>
           <?php
           }
           ?>

          </li>
          <li style="margin-left:8px">
            <form class="" action="/index.php/auth/membership" method="post">
                <input type="submit" class="btn btn-primary" name="login" value="회원가입">

            </form>
         </li>
       </ul>
      </div>

    </div>
  </div>
</div>
     <?php
        if($this->config->item('is_deva')){
          ?>
   <div class="well span12" >
      개발환경을 수정 중입니다

   </div>
<?php
 }
   ?>



     <div class="container-fluid">
       <div class="row-fluid">
