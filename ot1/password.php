<meta charset="utf-8">
<?php
  require("config/config.php");
 require("lib/db.php");
 
 $conn = db_init($config["host"],$config["user"],$config["password"],$config["dbname"]);
$name = mysqli_real_escape_string($conn, $_POST['author']);
$password	= mysqli_real_escape_string($conn, $_POST['password']);
	
	 $result = "select * FROM user WHERE name='".$name."' AND password ='".$password."' " ;
  $row = mysqli_query($conn, $result);
      $user = mysqli_fetch_assoc($row);
	  
  
  
 if($row->num_rows == 0){
 echo "꺼져 ";
 }else{
 	echo "맞습니다";
}
 
  /*$pass1 = $_GET['pass'];
  
  $real = 1111;
  
  if($real == $pass1){
  	 echo "맞습니다";
  } else{
  	 echo "틀렸습니다";
  }; */
  
 
  
?>

