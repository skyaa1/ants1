<?php
  
  $conn = mysqli_connect('localhost','root','111111');
mysqli_select_db($conn,'opentutorials');
  
 
  $result = mysqli_query($conn,"delete  from topic WHERE id = ".$_GET['di']);
 
 
  
  header('location: http://ec2-54-238-246-145.ap-northeast-1.compute.amazonaws.com/egoing/copy%20test.php');

  
?>