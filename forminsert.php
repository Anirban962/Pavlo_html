<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Insert in Php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="forminsert_action.php" method="post" enctype="multipart/form-data">
	enter name: <input type="text" name="name"><br>
	enter email: <input type="email" name="email"><br>
	enter password: <input type="password" name="password"><br>
	enter image: <input type="file" name="uploadimage"><br>
	enter phone: <input type="text" name="phone"><br>
	<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>