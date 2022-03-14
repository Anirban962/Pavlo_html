<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		enter image: <input type="file" name="uploadimage"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php 
	$filename = $_FILES["uploadimage"]["name"];//move into folder as same name
	// print_r($filename);
	$tempname = $_FILES["uploadimage"]["tmp_name"];//move into specified path

	$folder = "image/".$filename;
	move_uploaded_file($tempname, $folder);
	echo "<img src = '$folder' height='70%' width='100%'>";



	 ?>
</body>
</html>