<?php
include("connection.php");

$nme = $_REQUEST["name"];

$address = $_REQUEST["address"];
$email = $_REQUEST["email"];
$passWord= md5($_REQUEST["pass"]);
$person = implode(",",$_REQUEST["pers"]);
$f_items = $_REQUEST["food"];
$place = $_REQUEST["place_type"];
$extra = implode(",",$_REQUEST["extra"]);
$filename = $_FILES["upload_image"]["name"];
// print_r($filename);
// echo $nme,$address,$email,$passWord,$person,$f_items,$place,$extra,
$tempname= $_FILES["upload_image"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname, $folder);

$sql = "INSERT INTO `restaurant_test`(`name`, `address`, `email`, `password`, `person`, `food_items`, `place`, `picsource`, `extra_item`) VALUES (:name,:addr,:mail,:pass,:pers,:fd_items,:plce,:img,:extras)";

$query= $conn->prepare($sql);
$query->bindparam(':name',$nme);
$query->bindparam(':addr',$address);
$query->bindparam(':mail',$email);
$query->bindparam(':pass',$passWord);
$query->bindparam(':pers',$person);
$query->bindparam(':fd_items',$f_items);
$query->bindparam(':plce',$place);
$query->bindparam(':img',$folder);
$query->bindparam(':extras',$extra);


if ($query->execute()) 
{
	// echo "data inserted successfully";
	header("location:login.php");
}
else{
	echo "<h1>data not inserted</h1>";
}





  ?>