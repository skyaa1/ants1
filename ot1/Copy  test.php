<meta charset="utf-8">
<?php
   mysql_connect('localhost','root' ,'111111' );
  mysql_select_db('opentutorials');
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

if(empty($_GET['id'])===FALSE){
$result = mysql_query("select topic.id,title,name,description from topic
 LEFT  join user ON topic.author = user.id WHERE topic.id=".$_GET['id']);
$topic = mysql_fetch_array($result);

}

$result1 = mysql_query("select * from topic");



?>

<html>
  <body>
     <link rel="stylesheet" type="text/css" href="./css.css" />	  
  	 <h1><a href="./Copy%20%20test.php">javascript</a></h1>
  	 
  	 <ul>
	  <?php   
         while($topics = mysql_fetch_array($result1)){
	    echo '<li><a href="./Copy%20%20test.php?id='.$topics['id'].'">' . $topics['title']  .'</a> </li>' ;
	      }
		    ?>
        </ul>
       
      
  	
         <a href="./wriht.php" >쓰기</a>  
         
         
        <article>
        	<?php
        	if(empty($_GET['id'])===FALSE){
         	echo '<form action="./delete.php" method="get">
       	 <input type="submit" value="삭제" id="delete" />
       	 <p>  <input id="삭제버튼" type="text" value="' .$_GET['id'].'" name="di">	</p>
       	   </form>';
        	
         echo	'<h4><div>' . $topic['title']. '</div></h4>';
		 echo  '<div>' .$topic['name']. '</div>';
        echo	'<div>' . $topic['description']. '</div>';
			} ?>
        </article>
         

  </body>
</html>