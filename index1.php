<meta charset="utf-8">
<!DOCTYPE html>

<?php
 require 'config/config.php';
 require 'lib/db.php';

   $conn = db_init($config["host"],$config["user"],$config["password"],$config["dbname"]);
   mysqli_query($conn,"set session character_set_connection=utf8;");
   mysqli_query($conn,"set session character_set_results=utf8;");
   mysqli_query($conn,"set session haracter_set_client=utf8;");

   if(empty($_GET['id']) == FALSE){
   $result1 = "SELECT topic.id,topic.title,topic.description,user.name,topic.created FROM  topic LEFT JOIN user ON topic.author = user.id WHERE topic.id =".$_GET['id'] ;
    $row2 = mysqli_query($conn, $result1);
    $topic2 = mysqli_fetch_assoc($row2);
   }

   $result = "SELECT * FROM topic";
   $row = mysqli_query($conn, $result);


?>
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=deviece-width,initial-scale=1.0" >
	<header><title>엔트</title></header>
	<link rel="stylesheet"  type="text/css" href="./css.css" />
	<body id="black" class="">
	   <h1><a href="./index.php">hello world!!</a></h1>
     <img src="./1.png">

		<div><a href="./write.php">쓰기</a></div>

		<?php
		if(empty($_GET['id'])==true){
		echo'<iframe width="640" height="360" src="https://www.youtube.com/embed/VJqC--BHBEI" frameborder="0" allowfullscreen></iframe>'
       ; }
        ?>


     <form action="loging.php" method="post" autocomplete="on" >
       <input type="text" name="id" placeholder="아이디 입력" autofocus required>
       <input type="password" name="password" placeholder="암호 입력" autocomplete="off" pattern=".+[a-z	A-Z]" >

       <input type="submit" value="로그인">


     </form>


		<nav>
			<ul>
				<?php
				while($topic = mysqli_fetch_assoc($row)){
			       echo'<li><a href="./index.php?id='.mysqli_real_escape_string($conn,$topic['id']). '">'.htmlspecialchars($topic['title']) .'</a></li>';
				}
				?>
			</ul>
		</nav>



	 <article>
		 <?php
		   if(empty($_GET['id']) == FALSE){

		     echo'<div><h3>'.htmlspecialchars($topic2['title']).'</h3></div>';
		     echo'<div>'.htmlspecialchars($topic2['name']).'</div>';
		     echo'<div>'.strip_tags($topic2['description'],'<a><h1><h2><h3><h4><h5><li><ul><ol><div>').'</div>';

		     echo   '<form action="./delete.php" method="get">
			    <p> <input type="hidden" id="삭제버튼" type="text" value="'.$_GET['id'].'" name="di"> </p>
			  <p> id:<input type="text" name="id1" /> </p>
			  <p> password:<input type="password" name="password"/> </p>
			   <input type="submit" value="삭제" />

		</form>';}
		     ?>

	     <input type="button" name="name" value="white" onclick="document.getElementById('black'). className =''"/>
	     <input type="button" name="name" value="black" onclick="document.getElementById('black'). className ='id'"/>



	 </article>
 <div>
   <input type="button" value="ㅓ열기" onclick="winopen()" />
   <input type="text" onkeypress="winmessage(this.value)"  />
   <input type="button" value="닫기" onclick="winclose()" />

 </div>
   <script>
function winopen(){
a  = window.open('test.html');
 }
 function winmessage(win){
   a.document.getElementById('gg').innerText=win;
  }
  function winclose(){
  	a.close();
  }123
   </script>
	</body>
</html>
