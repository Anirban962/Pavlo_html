<?php  
include("connection.php");
$nme = $_REQUEST["name"];
$mail = $_REQUEST["email"];
$id = $_REQUEST["uid"];
$ph = $_REQUEST["phone"];
$filename = $_FILES["uploadimage"]["name"];//move into folder as same name
	// print_r($filename);
	$tempname = $_FILES["uploadimage"]["tmp_name"];//move into specified path

	$folder = "image/".$filename;
	move_uploaded_file($tempname, $folder);
// echo $nme,$mail,$pass,$ph;
	$sql = "UPDATE `user` SET `name`='$nme',`email`='$mail',`phone`='$ph',`picsource`='$folder' WHERE user_id='$id'";
	
	$data = mysqli_query($conn,$sql);
	if ($data) {
		header("location:display.php");
	}
	else{
		echo "data not updated";
	}


	?>