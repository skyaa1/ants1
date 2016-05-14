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
  <div >
    <form class="" action="/index.php/topic/get/42" method="post">
        <input type="submit" class="btn btn-primary" name="login" value="로그아웃">

    </form>
  </div>
<?php
}
?>

<div class="span10">
   <article>
     <h2> <?=$topics->title?></h2>
     <div>
       <div>
         <?=kdate($topics->created)?>
       </div>
     <?=$topics->description?>
     </div>
   </article>



   <div class="span12">

   </div>
   <div class="row">
     <div class="span4">
     </div>
     <div class="span1">
        <a href="/index.php/topic/add" class="btn btn-primary">쓰기</a>
     </div>
     <form class="span1" action="/index.php/topic/update" method="post">
       <input type="hidden" name="update" value="<?= $id?>">
       <input type="submit"  value="수정" class="btn btn-primary">
     </form>
      <form class="span1" action="/index.php/topic/delete" method="post">
      <input type="hidden" name="delete" value="<?= $id?>">
        <input type="submit" value="삭제" class="btn btn-primary">
      </form>
    </div>



</div>
