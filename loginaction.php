<?php  
session_start();
include("connection.php");
$email = $_REQUEST["email"];
$pass = md5($_REQUEST["password"]);
// echo $email,$pass;
$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
$data = mysqli_query($conn,$sql);
$res = mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);
// print_r($result["user_id"]);


if ($res) {
	$_SESSION["id"]= $result["user_id"];
	header("location:display.php");
}
else{
	echo "login failed";
}

?>




