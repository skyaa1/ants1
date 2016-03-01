<?php
 $conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "opentutorials");
$sql = "SELECT * FROM user WHERE name='".$_POST['author']."'";
$result  = mysqli_query($conn, $sql);

  

  
 
  
 if($result->num_rows >= 1){
	
  
  
 $row = mysqli_fetch_assoc($result);

   $user_id = $row['id'];
   
   
	
} else{
	 $user = "INSERT INTO user(name,password)VALUES('" 
 .$_POST['author']."','".$_POST['password']."')";
   mysqli_query($conn,$user);
    $user_id = mysqli_insert_id($conn);
  
   
   

}  $into = "INSERT INTO topic(title,description,author,created)VALUES('" 
 .$_POST['title']."','".$_POST['description']."','".$user_id."',now())";
 
 $result = mysqli_query($conn, $into);

header('location: http://ec2-54-238-246-145.ap-northeast-1.compute.amazonaws.com/egoing/copy%20test.php');
  
 
  ?>
 
  
  
  
