
<div class="span2">
   <ul class="nav nav-tabs nav-stacked">

    <?php
        foreach($topic as $data3){
    ?>

        <li><a href="/index.php/topic/get/<?=$data3->id?>"><?=$data3->title?></a></li>

    <?php
        }
    ?>
  </ul>
</div>
