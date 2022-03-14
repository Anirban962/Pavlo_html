<?php
session_start();
include("connection.php");

$id= $_SESSION["id"];	
$old_password= md5($_REQUEST["oldpass"]);
$sql1="SELECT * FROM user WHERE user_id= '$id'";
$data1= mysqli_query($conn,$sql1);
$result= mysqli_fetch_assoc($data1);
$check_pass= $result["password"]; 

// echo $old_password."<br>".$new_password."<br>".$confirm_password;

if($check_pass==$old_password) 
{
	$new_password= md5($_REQUEST["newpass"]);
	$confirm_password= md5($_REQUEST["conf_pass"]);

	if ($old_password!=$new_password) {
		if ($new_password==$confirm_password) {
			$sql= "UPDATE `user` SET `password`='$confirm_password' WHERE user_id= '$id'";
			$data = mysqli_query($conn,$sql);
			if ($data) {
				header("location:login.php");
			}
			else{
				echo "Error! New password doesn't save";
			}

		}
		else{
			echo "new vs confirm password doesn't match";
		}
	}
	else{
		echo "old vs new password are same";
	}


}
else
{
	echo "Your old password is incorrect";
}



?>