<div class="span2">
    <ul class="nav nav-tabs nav-stacked">
 <?php
  foreach($topics1 as  $value){
  ?>
  <li><a href="/index.php/topic/get/<?=$value->id?>"><?= $value ->title ?></a></li>

  <?php

 } ?>
</ul>
