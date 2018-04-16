<html>
<head>
	<title>Add Vinyl</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="50%" border="0">
			<tr> 
				<td>Album</td>
				<td><input type="text" name="album"></td>
			</tr>
			<tr> 
				<td>Album Artist</td>
				<td><input type="text" name="artist"></td>
			</tr>
			<tr> 
				<td>Year</td>
				<td><input type="number" name="year"></td>
			</tr>
			<tr> 
				<td>Genre</td>
				<td><input type="text" name="genre"></td>
			</tr>
			<tr> 
				<td>Diameter</td>
				<td>
					<select name="diameter">
					  <option value='12\"'>12"</option>
					  <option value='7\"'>7"</option>
					  <option value='others'>others</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="number" name="price"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into vinyl table.
	if(isset($_POST['submit'])) {
		$album = $_POST['album'];
		$artist = $_POST['artist'];
		$year = $_POST['year'];
		$genre = $_POST['genre'];
		$diameter = $_POST['diameter'];
		$price = $_POST['price'];
		$password = $_POST['password']; 
		$hash = password_hash("zabc1230", PASSWORD_DEFAULT);
		
		// include database connection file
		include_once("config.php");
		if( password_verify($password, $hash) ) {
		    // Insert user data into table
			$result = mysqli_query($mysqli, "INSERT INTO `vinyl` (`Album Name`, `Album Artist`, `Year`, `Genre`, `Diameter`,`Price`) VALUES('$album', '$artist', '$year', '$genre', '$diameter', '$price');");
			
			// Show message when user added
			echo "Vinyl added successfully!<br><a href='index.php'>View Vinyls</a>";
		} else {
		    echo "Invalid Password";
		}
				
		
	}
	?>
</body>
</html>