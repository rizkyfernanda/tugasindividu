<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM vinyl ORDER BY `Album Name` ASC");
?>
 
<html>
<head>    
    <title>Welcome to Fauzi's Collection</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
    <header>
    <h1>Welcome to Fauzi's<br>Collection for sell</h1>
    </header>

    <div class="explainer">
    <h3>Here are our classic vinyls section</h3><br><br><br><br><br>
    <p>Although this precious stuff slowly facades through decades, using vinyl is one of the best ways to enjoy your favorite music in your own room. These are some exclusive rarities we preserve that you can buy!</p><br><br><br>
    </div>

    <div class="thetable">
    <a href="add.php" id="new">Add new vinyl</a><br/><br/><br>
 
    <table width='90%'>
 
    <tr>
        <th>Album Name</th> <th>Album Artist</th> <th>Year</th> <th>Genre</th> <th>Diameter</th> <th>Price</th> <th>Update</th>
    </tr>
    <?php  
    while($vinyl_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$vinyl_data['Album Name']."</td>";
        echo "<td>".$vinyl_data['Album Artist']."</td>";
        echo "<td>".$vinyl_data['Year']."</td>";
        echo "<td>".$vinyl_data['Genre']."</td>"; 
        echo "<td>".$vinyl_data['Diameter']."</td>";
        echo "<td>$".$vinyl_data['Price']."</td>";   
        echo "<td><a href='edit.php?id=$vinyl_data[id]'>Edit</a> | 
        		  <a href='delete.php?id=$vinyl_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    </div>
    <div class="footer">
        <small>&copy; Copyright 2018, Testingmrizkyfer</small>
    </div>
</body>
</html>