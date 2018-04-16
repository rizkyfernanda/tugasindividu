<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$album = $_POST['album'];
	$artist = $_POST['artist'];
	$year = $_POST['year'];
	$genre = $_POST['genre'];
	$diameter = $_POST['diameter'];
	$price = $_POST['price'];
	$password = $_POST['password']; 
	$hash = password_hash("zabc1230", PASSWORD_DEFAULT);

	if( password_verify($password, $hash) ) {
		    // Insert  data into table
			$result = mysqli_query($mysqli, "UPDATE `vinyl` SET `Album Name` ='$album',`Album Artist`='$artist',`Year`='$year',`Genre`='$genre',`Diameter`='$diameter',`Price`='$price' WHERE `id` ='$id'");
		} 
	// update user data
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM vinyl WHERE id=$id");
 
while($vinyl_data = mysqli_fetch_array($result))
{
	$album = $vinyl_data['Album Name'];
	$artist = $vinyl_data['Album Artist'];
	$year = $vinyl_data['Year'];
	$genre = $vinyl_data['Genre'];
	$diameter = $vinyl_data['Diameter'];
	$price = $vinyl_data['Price'];
}
?>
<html>
<head>	
	<title>Edit Vinyl Data</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Album Name</td>
				<td><input type="text" name="album" value=<?php echo $album;?>></td>
			</tr>
			<tr> 
				<td>Album Artist</td>
				<td><input type="text" name="artist" value=<?php echo $artist;?>></td>
			</tr>
			<tr> 
				<td>Year</td>
				<td><input type="number" name="year" value=<?php echo $year;?>></td>
			</tr>
			</tr>
			<tr> 
				<td>Genre</td>
				<td><input type="text" name="genre" value=<?php echo $genre;?>></td>
			</tr>
			<tr> 
				<td>Diameter</td>
				<td>
					<select name="diameter">
					  <option value=<?php echo $diameter;?>><?php echo $diameter;?>"</option>
					  <option value='12\"'>12"</option>
					  <option value='7\"'>7"</option>
					  <option value='others'>others</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="number" name="price" value=<?php echo $price;?>></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>

		</table>
	</form>
</body>
</html>