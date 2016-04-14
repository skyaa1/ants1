
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
      <form class="span1" action="/index.php/topic/delete" method="post">
      <input type="hidden" name="delete" value="<?= $delete_id?>">
        <input type="submit" value="삭제" class="btn btn-primary">
      </form>
    </div>



</div>
