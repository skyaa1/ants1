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
  <form class="" action="index.html" method="post">
    <input type="button" name="name" value="">
  </form>
</div>
</div>
