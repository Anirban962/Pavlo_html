<?php  
session_start();
include("connection.php");

$id = $_REQUEST["ep"];
// echo $id;
$sql = "SELECT * FROM restaurant_test WHERE user_id= '$id'";
$data= $conn->query($sql);
$result = $data->fetch(PDO::FETCH_ASSOC);
// print_r($result);
$_SESSION['image']= $result['picsource'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>biodata</title>
	<link rel="stylesheet" href="">
		<style type="text/css">
		#uid{
			display: none;
		}
	</style>
</head>
<body>
	<center>
		<table border="2" cellpadding="10">

			<form action="edit_action.php" method="post" enctype="multipart/form-data">
				<tr>
					<td colspan="2"><h1><center>Restaurant Booking Table</center></h1></td> <br>
				</tr>

				<tr>
					<td><h3>Enter Your Name:
					</h3></td>
					<td><input type="text" name="name" value="<?php echo $result['name']?>" ></td>

				</tr>
			

				<tr>
					<td><h3>Enter Your Address: <br>
					</h3></td>
					<td>
						<input type="text" name="address" value="<?php echo $result['address']?>">
					</td>

					</tr>

					<tr>
						<td><h3>Enter Your Email Id: <br>
						</h3></td>
						<td>
							<input type="email" name="email" value="<?php echo $result['email']?>"></td>

						</tr>

			
						<!--showing user id-->
				<tr id="uid">
					<td><input type="text" name="uid" value="<?php echo $id?>"></td>
				</tr>
							<tr>
								<td><h3>Person: <br>
								</h3></td>

								<?php
								$persarray=explode(",",$result['person']);

								  ?>

								<td>
									<input type="checkbox" name="pers[]" value="one" <?php if(in_array('one',$persarray)){echo "checked";} ?>> 1
									<input type="checkbox" name="pers[]" value="two" <?php if(in_array('two',$persarray)){echo "checked";} ?>> 2
									<input type="checkbox" name="pers[]" value="three" <?php if(in_array('three',$persarray)){echo "checked";} ?>> 3
									<input type="checkbox" name="pers[]" value="four" <?php if(in_array('four',$persarray)){echo "checked";} ?>> 4 &nbsp;
								</td>
							</tr>

									<tr>
								<td><h3>Food Items &nbsp;<br>
								</h3></td>
								<td>				

									<select name="food">
										<option value="select">Select</option>
										<option value="biriyani" <?php if($result['food_items']=='biriyani'){echo "selected";}?>>Biriyani</option>
										<option value="fried_rice" <?php if($result['food_items']=='fried_rice'){echo "selected";}?>>Fried Rice</option>
										<option value="moglai" <?php if($result['food_items']==
										'moglai'){echo "selected";}?>>Moglai</option>
										<option value="mutton_chap" <?php if($result['food_items']==
										'mutton_chap'){echo "selected";}?>>Mutton Chap</option>
									</select>
								</td>
							</tr>


							<tr>
								<td><h3>Place
								</h3></td>
								<td>
									<input type="radio" name="place_type" value="ac" <?php if($result['place']=='ac'){echo "checked";}?>> AC
									<input type="radio" name="place_type" value="nonac" <?php if($result['place']=='nonac'){echo "checked";}?>> Non-AC
									
								</td>
								</tr>						

							<tr>
								<td><h3>Image Upload &nbsp;
								</h3></td>
								<td>
									<input type="file" name="upload_image">
								</td>
							</tr>

							<tr>
								<td><h3>Extras: <br>
								</h3></td>

								<?php
								$extrasarray=explode(",",$result['extra_item']);

								  ?>

								<td>
									<input type="checkbox" name="extra[]" value="cola" <?php if(in_array('cola',$extrasarray)){echo "checked";} ?>> cola
									<input type="checkbox" name="extra[]" value="icecream" <?php if(in_array('icecream',$extrasarray)){echo "checked";} ?>> Ice Cream
									<input type="checkbox" name="extra[]" value="juice" <?php if(in_array('juice',$extrasarray)){echo "checked";} ?>> Juice
								</td>
							</tr>

							<tr>
								<td colspan="2" height="50" bgcolor="gray" >
									<center>
										<button type="submit">Update</button>
										<button type="reset">Reset</button>
									</center>
								</td>	
							</tr>
						</form>
					</table>
				</center>
			</body>
			</html>