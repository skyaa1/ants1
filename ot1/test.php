
<?php
  $conn = mysqli_connect( "localhost","root" ,111111 );
  mysqli_select_db($conn ,'opentutorials');
mysqli_query($conn ,"set session character_set_connection=utf8;");
mysqli_query($conn ,"set session character_set_results=utf8;");
mysqli_query($conn ,"set session character_set_client=utf8;");
$result = mysqli_query($conn,"SELECT * FROM topic WHERE id = 2");
$topic = mysqli_fetch_assoc($result);

$result1 = mysqli_query($conn,"SELECT * FROM topic");



?>
<meta charaset="utf-8" >
<html>
  <body>
  	<h1>javascript</h1>
  	 <ul>
	  <?php   
         while($topics = mysqli_fetch_assoc($result1)){
	  $x = $topics['id']
	  
	  ?>
	     
	       <li><a href="./egoing/test.php?id=<?= $x ?>">
	 	 <?php 
	 	  echo $topics['title']
	 	 
	 	  ?>
	 	 </a>
	       </li> 
	
		   <?php 
		   };
		    ?>
        </ul>
        
        <article>
        	
        	<div><?php echo $topic['title'] ?></div>
        	<div><?php echo $topic['description'] ?></div>
        	
        </article>
  </body>
</html>