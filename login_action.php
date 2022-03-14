<?php
session_start();
include("connection.php");

$email= $_REQUEST["email"];
$pass= md5($_REQUEST["password"]);
// echo $email,$pass;
$sql="SELECT * FROM `restaurant_test` WHERE email= :mail AND password= :passW";

$query= $conn->prepare($sql);
$query->bindparam(':mail',$email);
$query->bindparam(':passW',$pass);
$data= $query->execute();
$res= $query->rowCount();

if ($res) {
	// echo "Login successfully";
	$_SESSION['id']==$result['user_id'];
	$_SESSION['image']==$result['picsource'];
	header("location:display.php");
}
else{
	echo "Login failed";
}




  ?>