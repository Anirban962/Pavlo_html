<?php  
include("connection.php");
$nme = $_REQUEST["name"];
$mail = $_REQUEST["email"];

$sql1= "SELECT * FROM user WHERE email= '$mail'";
$data1= mysqli_query($conn,$sql1);
// $result= mysqli_fetch_assoc($data1);
$res1 = mysqli_num_rows($data1);
// $check_mail= $res1["email"];

// echo $nme,$mail,$pass,$ph;
if($res1==0)
{
	$pass = md5($_REQUEST["password"]);
	$ph = $_REQUEST["phone"];
$filename = $_FILES["uploadimage"]["name"];//move into folder as same name
	// print_r($filename);
	$tempname = $_FILES["uploadimage"]["tmp_name"];//move into specified path

	$folder = "image/".$filename;
	move_uploaded_file($tempname, $folder);

	$sql = "INSERT INTO `user`(`user_id`, `name`, `email`, `password`, `phone`,`picsource`) VALUES ('','$nme','$mail',
	'$pass','$ph','$folder')";
	
	$data = mysqli_query($conn,$sql);
	if ($data) {
		header("location:login.php");
	}
	else{
		echo "data not inserted";
	}

}
else
{
	echo "This mail is already registered with us";	
}

	?>