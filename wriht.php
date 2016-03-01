<meta charset="utf-8">
<?php
 require("config/config.php");
 require("lib/db.php");
 
 $conn = db_init($config["host"],$config["user"],$config["password"],$config["dbname"]);
 mysqli_query($conn,"set session character_set_connection=utf8;");
mysqli_query($conn,"set session character_set_results=utf8;");
mysqli_query($conn,"set session character_set_client=utf8;");

if(empty($_GET['id'])===FALSE){
	

$result = mysqli_query($conn,"select * from topic WHERE id = ".$_GET['id']);
$topic = mysqli_fetch_array($result);}

$result1 = mysqli_query($conn,"select * from topic");




?>

<html>
  <body>
     <link rel="stylesheet" type="text/css" href="./css.css" />	  
  	 <h1><a href="./copy%20test.php">javascript</a></h1>
  	 
  	 <ul>
	  <?php   
         while($topics = mysqli_fetch_array($result1)){
	    echo '<li><a href="./copy%20test.php?id='.$topics['id'].'">' . $topics['title']   .'</a> </li>' ;
	      }
		    ?>
        </ul>
     
    
     
      
        
        <article>
         	<form action="process.php" method="post">
        	<p>제목:    <input type="text" name="title">	</p>
        	<p>작성자:    <input type="text" name="author">	</p>
        	<p>본문: <textarea id="id" name="description"></textarea> </p>
        	<p>암호: <input type="password" name="password"> </p>
        	<input  type="submit"  />
        	 </form>
        	
			
		 
        </article>
  </body>
</html>