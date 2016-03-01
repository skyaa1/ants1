<meta charset="utf-8">
<?php
 require 'config/config.php';
 require 'lib/db.php';

   $conn = db_init($config["host"],$config["user"],$config["password"],$config["dbname"]);
   mysqli_query($conn,"set session character_set_connection=utf8;");
   mysqli_query($conn,"set session character_set_results=utf8;");
   mysqli_query($conn,"set session character_set_client=utf8;");

 /*if(empty($_GET('id')) == FALSE){
    $result1 = "SELECT * FROM topic WHERE id =".$GET['id'] ;
    $row2 = mysqli_query($conn, $result1);
    $topic2 = mysqli_fetch_assoc($row2);
 }*/

   $result = "SELECT * FROM topic";
 $row = mysqli_query($conn, $result);


?>
<html>
	<header><title>엔트</title></header>
	<link rel="stylesheet" type="text/css" href="./css.css" />
	<body id="black" class="">

	   <h1><a href="./index.php">hello world!!</a></h1>
		<form action="./prossece.php" method="post">
		<p>제목 :<input type="text"  name="title" /> </p>
		<p>작성자 :<input type="text"  name="name" /></p>
		<p>본문 :<textarea name="description"></textarea> </p>
		<p>패스워드 :<input type="password"  name="password" /> </p>
		  <input type="submit" value="저장" />
		</form>

		<nav>
			<ul>
				<?php
				while($topic = mysqli_fetch_assoc($row)){
			   echo'<li><a href="./index.php?id='.$topic['id']. '">'.$topic['title'] .'</a></li>';
				}
				?>
			</ul>
		</nav>

	 <article>
	 <h2 id="gg">꺼져 병슌아</h2>
	 </article>
	 <input type="button" name="name" value="white" onclick="document.getElementById('black'). className =''"/>
	    <input type="button" name="name" value="black" onclick="document.getElementById('black'). className ='id'"/>
	</body>
</html>
