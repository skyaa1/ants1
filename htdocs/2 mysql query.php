<meta charset="utf-8">
<?php
mysql_connect('localhost','root','111111');
mysql_select_db('opentutorials');
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

$result = mysql_query("select * from topic WHERE id = ".$_GET['id']);
$row = mysql_fetch_array($result);

$re1 = mysql_query("select * from topic");

 
?>

<html>
	
	<style>
		h1{
			font-size: 80px;
			border-bottom:3px solid blue;
			padding: 40px;
			padding-left: 100px;
		}
		
		h4{ font-size: 25px;
			
		}
		ul{
			float: left;
			border-right:3px solid blue;
			paddig: 150px;
		}
		article{
			float: right;
			padding-left:  -450px;
		}
		
	</style>
	<body>
		
		<h1>javascrip</h1>
		
		
		
		<form action="password.php">
         <p>암호 를 입력해라 </p>
       <input type="text" name="password" />
       <input type="submit" />
</form>		
		<nav>
		   <ul>
		   	 <?php
			    while($row1 = mysql_fetch_array($re1)){
			   ?>
			  <li><a target="_blank" href="./2%20mysql%20query.php?id=<?= $row1['id']?>">
			  	<?php echo $row1['title']; ?></a></li>
				
				<?php
				}
			  ?>
	       </ul>
		</nav>
		
		<article>
		
			<div><h4> <?php print $row['title'];?></h4> </div>
			<div><?php print $row['description']; ?> </div>
		</article>
	</body>
</html>