<?php
include("connection.php");
$id= $_REQUEST["del"];
// echo $id;
$sql = "DELETE FROM `restaurant_test` WHERE user_id='$id'";
$data = $conn->query($sql);

if ($data) 
{
	header("location:display.php");
}
else{
	echo "not deleted";
}



  ?>