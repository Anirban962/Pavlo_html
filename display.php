<?php  
include("connection.php");
$sql = "SELECT * FROM user";
$data = mysqli_query($conn,$sql);
// $result = mysqli_fetch_assoc($data);
// print_r($result);
// print_r($result['name']);

?>

<table border="1">
	
		<tr>
			<th>S.I. No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Phone</th>
			<th>Picture</th>
			<th>Action</th>
		</tr>
	
	



<?php  
$i= 1;
while ($result = mysqli_fetch_assoc($data)) 
{
	// print_r($result);
?>

	<tr>
		<td><?php echo $i;$i++;?></td>
		<td><?php echo $result["name"]?></td>
		<td><?php echo $result["email"]?></td>
		<td><?php echo $result["password"]?></td>
		<td><?php echo $result["phone"]?></td>
		<td><img src='<?php echo $result["picsource"]?>' height="100" width="100"></td>
		<td><a href="edit.php?ep=<?php echo $result['user_id']?>">edit</a>
			<a href="delete.php?del=<?php echo $result['user_id']?>">delete</a>
		</td>
	</tr>

<?php
}

?>
</table>