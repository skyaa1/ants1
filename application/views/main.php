

     꺼지삼1

 <ul>
  <?php
   foreach($topics1 as  $value){
   ?>
   <li><a href="/index.php/topic/get/<?=$value->id?>"><?= $value ->title ?></a></li>

   <?php

  } ?>
</ul>
