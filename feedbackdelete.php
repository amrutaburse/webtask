<?php

$servername="localhost"; 
$username = "root";
$password ="";
$database = "banking_system";

 $conn = mysqli_connect($servername,$username,$password,$database);
 $sql = "DELETE FROM `feedback_tb`";

 $delete = mysqli_query($conn,$sql);
 if($delete)
 {
 		header("Location:feedbackview.php");
 }

?>
