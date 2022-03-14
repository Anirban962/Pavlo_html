<?php 
include("connection.php");
$id = $_REQUEST["ep"];
// echo $id;
$sql = "SELECT * FROM user WHERE user_id='$id'";
$data = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($data);
// print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Insert in Php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="formedit_action.php" method="post" enctype="multipart/form-data">
	enter name: <input type="text" name="name" value="<?php echo $result['name']?>"><br>

	<input type="text" name="uid" value="<?php echo $id ?>" hidden>
	
	enter email: <input type="email" name="email"  value="<?php echo $result['email']?>"><br>
	
	enter image: <input type="file" name="uploadimage"><br>
	enter phone: <input type="text" name="phone"  value="<?php echo $result['phone']?>"><br>
	<input type="submit" name="submit" value="Update">
	</form>
</body>
</html>

