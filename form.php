<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>biodata</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<table border="2" cellpadding="10">

			<form action="formaction.php" method="post" enctype="multipart/form-data">
				<tr>
					<td colspan="2"><h1><center>Restaurant Booking Table</center></h1></td> <br>
				</tr>

				<tr>
					<td><h3>Enter Your Name:
					</h3></td>
					<td><input type="text" name="name" placeholder="Enter Your Name"></td>

				</tr>
			

				<tr>
					<td><h3>Enter Your Address: <br>
					</h3></td>
					<td>
						<textarea name="address" rows="7" cols="30" placeholder="Enter Your Address"></textarea></td>

					</tr>

					<tr>
						<td><h3>Enter Your Email Id: <br>
						</h3></td>
						<td>
							<input type="email" name="email" placeholder="example@gmail.com"></td>

						</tr>

						<tr>
						<td><h3>Choose Your Password: <br>
						</h3></td>
						<td>
							<input type="password" name="pass"></td>

						</tr>

							<tr>
								<td><h3>Person: <br>
								</h3></td>
								<td>
									<input type="checkbox" name="pers[]" value="one"> 1
									<input type="checkbox" name="pers[]" value="two"> 2
									<input type="checkbox" name="pers[]" value="three"> 3
									<input type="checkbox" name="pers[]" value="four"> 4 &nbsp;
								</td>
							</tr>

									<tr>
								<td><h3>Food Items &nbsp;<br>
								</h3></td>
								<td>				

									<select name="food">
										<option value="select">Select</option>
										<option value="biriyani">Biriyani</option>
										<option value="fried_rice">Fried Rice</option>
										<option value="moglai">Moglai</option>
										<option value="mutton_chap">Mutton Chap</option>
									</select>
								</td>
							</tr>


							<tr>
								<td><h3>Place
								</h3></td>
								<td>
									<input type="radio" name="place_type" value="ac"> AC
									<input type="radio" name="place_type" value="nonac"> Non-AC
									
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
								<td>
									<input type="checkbox" name="extra[]" value="cola"> cola
									<input type="checkbox" name="extra[]" value="icecream"> Ice Cream
									<input type="checkbox" name="extra[]" value="juice"> Juice
								</td>
							</tr>

							<tr>
								<td colspan="2" height="50" bgcolor="gray" >
									<center>
										<button type="submit">Submit</button>
										<button type="reset">Reset</button>
									</center>
								</td>	
							</tr>
						</form>
					</table>
				</center>
			</body>
			</html>