
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
