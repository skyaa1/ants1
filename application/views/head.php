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

<div class="navbar navbar-fixed-top">
 <div class="navbar-inner">
   <div class="container">


      <a class="brand" style="color:green" href="/index.php/topic/get/42">ents dev.</a>


      <div class="nav-collapse collapse">

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
