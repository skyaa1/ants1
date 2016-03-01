<meta charset="utf-8">
<?php
 require 'config/config.php';
 require 'lib/db.php';
 
   $conn = db_init($config["host"],$config["user"],$config["password"],$config["dbname"]);
 $name = mysqli_real_escape_string($conn,$_POST['name']);
 $result3 = "SELECT * from user WHERE name ='".$name."'";
 $rows = mysqli_query($conn,$result3 );
 $password = mysqli_real_escape_string($conn,$_POST['password']);
 
        
   if($rows -> num_rows == 0){
 $query = "INSERT INTO user(name,password)VALUES('".$name."','".$password. "')";
   $rows1 = mysqli_query($conn, $query); 
   $author = mysqli_insert_id($conn);
  } else{
  $topic4= mysqli_fetch_assoc($rows);
  $author= $topic4['id'];
	
   }
 $title = mysqli_real_escape_string($conn,$_POST['title']);
 $description = mysqli_real_escape_string($conn,$_POST['description']);
 
 
 $insert = "INSERT INTO topic(title,description,author,created)VALUES(
           '".$title."','". $description."','".$author."',". "now() )";
    mysqli_query($conn, $insert);
   
 header('location: index.php');
 
 

 

?>