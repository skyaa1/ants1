<meta charset="utf-8">
<?php
 require("config/config.php");
 require("lib/db.php");
 
 $conn = db_init($config["host"],$config["user"],$config["password"],$config["dbname"]);
mysqli_query($conn,"set session character_set_connection=utf8;");
mysqli_query($conn,"set session character_set_results=utf8;");
mysqli_query($conn,"set session character_set_client=utf8;");

if(empty($_GET['id'])===FALSE){
$result = mysqli_query($conn,"select topic.id,title,name,description from topic
 LEFT  join user ON topic.author = user.id WHERE topic.id=".$_GET['id']);
$topic = mysqli_fetch_array($result);

}

$result1 = mysqli_query($conn,"select * from topic");



?>

<html>
  <body>
  	<div class="container">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <link rel="stylesheet" type="text/css" href="./css.css" />	  
  	 

 <h1 class="hero-unit"><a href="./copy%20test.php">javascript</a></h1>
  	 
  	 <p>
      <a class="btn btn-primary btn-large">
      Learn more
    </a>
 </p>


  	 
  	   <link href="./bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

<div class="row"> 
      <form action="password.php" method="post" class="form-inline">
      	    <input class="span4" type="text" class="input-small"  placeholder="ID" name="author" />  
      		<input class="span4" type="password" class="input-small" placeholder="Password" name="password" /> 
      	<label class="checkbox">
       <input type="checkbox"> Remember me
       </label>
      	<div class="btn-group">
      		<button type="submit" class="btn">로그인</button>
      		<button  class="btn">회원가입</button>
      	<button class="btn"><a class="span2"  href="./wriht.php" >쓰기</a>  </button>
      	</div>	
      </form>
  	</div> 

 
 <ul class="nav nav-list">
	  <?php   
         while($topics = mysqli_fetch_array($result1)){
	    echo '<li><a href="./copy%20test.php?id='.$topics['id'].'">' . htmlspecialchars($topics['title'])  .'</a> </li>' ;
	      }
		    ?>
        </ul>
 
    
     
  	   
         
        <article>
        	<?php
        	if(empty($_GET['id'])===FALSE){
         	
        	
         echo	'<h4><div>' .htmlspecialchars($topic['title']). '</div></h4>';
		 echo  '<div>' .htmlspecialchars($topic['name']). '</div>';
        echo	strip_tags($topic['description'],'<a><h1><h2><h3><h4><li><ul><ol><article><div>');
			echo '<form action="./delete.php" method="get">
       	 <input type="submit" value="삭제" id="delete" />
       	 <p>  <input id="삭제버튼" type="text" value="' .$_GET['id'].'" name="di">	</p>
       	   </form>';
			} ?>
        </article>
         
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</div>
  </body>
</html>