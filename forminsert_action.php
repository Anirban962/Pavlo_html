<?php  
include("connection.php");
$nme = $_REQUEST["name"];
$mail = $_REQUEST["email"];
$pass = md5($_REQUEST["password"]);
$ph = $_REQUEST["phone"];
$filename = $_FILES["uploadimage"]["name"];//move into folder as same name
	// print_r($filename);
	$tempname = $_FILES["uploadimage"]["tmp_name"];//move into specified path

	$folder = "image/".$filename;
	move_uploaded_file($tempname, $folder);
// echo $nme,$mail,$pass,$ph;
	$sql = "INSERT INTO `user`(`user_id`, `name`, `email`, `password`, `phone`,`picsource`) VALUES ('','$nme','$mail',
	'$pass','$ph','$folder')";
	
	$data = mysqli_query($conn,$sql);
	if ($data) {
		header("location:login.php");
	}
	else{
		echo "data not inserted";
	}


	?>