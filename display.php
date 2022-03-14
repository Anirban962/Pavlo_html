<?php  
include("connection.php");
$sql = "SELECT * FROM restaurant_test";
$data = $conn->query($sql);
// $result = mysqli_fetch_assoc($data);
// print_r($result);

?>




<center>
	<table border="1">

		<tr>
			<th>S.I. No</th>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Password</th>
			<th>Person</th>	
			<th>Food Items</th>
			<th>Place</th>
			<th>Picture</th>
			<th>Extras</th>
			<th>Action</th>
		</tr>

		<?php
		$i = 1;
		while ($result=$data->fetch(PDO::FETCH_ASSOC))
		{
 	// print_r($result);
			?>
			<tr>
				<td><?php echo $i;$i++;?></td>
				<td><?php echo $result["name"]?></td>
				<td><?php echo $result["address"]?></td>
				<td><?php echo $result["email"]?></td>
				<td><?php echo $result["password"]?></td>
				<td><?php echo $result["person"]?></td>
				<td><?php echo $result["food_items"]?></td>
				<td><?php echo $result["place"]?></td>
				<td><img src='<?php echo $result["picsource"]?>' height="100" width="100"></td>
				<td><?php echo $result["extra_item"]?></td>
				<td><a href="edit.php?ep=<?php echo $result['user_id']?>">Edit</a>
					<a href="delete.php?del=<?php echo $result['user_id']?>">Delete</a>
					<a href="logout.php">Logout</a>

				</td>
			</tr>


			<?php  

		}
		?>

	</table>
</center>

