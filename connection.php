<?php  

$servername= "localhost";
$username= "root";
$password= "";
$db= "mwf9to12";

$conn = mysqli_connect($servername,$username,$password,$db);

if ($conn) {
	// echo "<h1>connection successful</h1>";
}
else{
	// echo "<h1>not connected</h1>";

	die("not connected due to". mysql_connect_error());
}

?>