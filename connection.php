<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mwf9to12";

$conn = new PDO("mysql:host={$servername};dbname={$db}",$username,$password);

try
{
	// echo "connection successful";
}
catch(PDOException $e)
{
	echo $e-> getMessage();
}






  ?>