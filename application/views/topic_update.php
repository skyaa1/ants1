
<div class="span10">
   <article>

     <div>
      <form class="" action="/index.php/topic/updates" method="post">
        <textarea rows="1" name="title" ><?=$update->title?></textarea>
        <textarea rows="15" name="description" ><?=$update->description?></textarea>
        <input type="hidden" name="id" value="<?= $update->id?>">
        <input type="submit" value="저장" class="btn btn-primary">

      </form>
     </div>
   </article>






</div>
