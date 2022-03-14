<?php
include("connection.php");
session_start();
$nme = $_REQUEST["name"];
$id= $_REQUEST["uid"];
// $pics= $_SESSION['image'];
$address = $_REQUEST["address"];
$email = $_REQUEST["email"];
$person = implode(",",$_REQUEST["pers"]);
$f_items = $_REQUEST["food"];
$place = $_REQUEST["place_type"];
$extra = implode(",",$_REQUEST["extra"]);
$img= $_SESSION['image'];
$filename = $_FILES["upload_image"]["name"];
// print_r($filename);
// echo $nme,$address,$email,$passWord,$person,$f_items,$place,$extra,
$tempname= $_FILES["upload_image"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname, $folder);

$sql = "UPDATE `restaurant_test` SET `name`=:name,`address`=:addr,`email`=:mail,`person`=:pers,`food_items`=:fd_items,`place`=:plce,`picsource`=:image,`extra_item`=:extras WHERE user_id= :uid";
	
$query= $conn->prepare($sql);
$query->bindparam(':name',$nme);
$query->bindparam(':uid',$id);
$query->bindparam(':addr',$address);
$query->bindparam(':mail',$email);
$query->bindparam(':pers',$person);
$query->bindparam(':fd_items',$f_items);
$query->bindparam(':plce',$place);
$query->bindparam(':image',$folder);
$query->bindparam(':extras',$extra);

if ($query->execute()) 
{
	// echo "data inserted successfully";
	header("location:display.php");
}
else{
	echo "<h1>update not done</h1>";
}





?>