
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
   <div>
     <a href="/index.php/topic/add" class="btn btn-primary">쓰기</a>
   </div>

</div>
