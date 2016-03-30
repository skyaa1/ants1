<div class="span10">
<article>
  <h1>
    <?=$topics2->title?>
  </h1>
  <div>
    <div>

      <?= kdate($topics2->created)?>

    </div>
    <?=auto_link($topics2->description)?>
  </div>

</article>

<div>
  <form  action="/topic/add" method="post">

     <a href="http://localhost/index.php/topic/add" class="btn">버튼</a>
     
  </form>
</div>
</div>
