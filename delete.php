<?php  
include("connection.php");
$id = $_REQUEST["del"];
	$sql = "DELETE FROM `user` WHERE user_id='$id'";
	
	$data = mysqli_query($conn,$sql);
	if ($data) {
		header("location:display.php");
	}	
	else{
		echo "data not deleted";
	}


	?>