<!DOCTYPE html>
<head>
<!-- My CSS link-->
<link href="style.css" rel="stylesheet">
<title>View Albums</title>
<meta charset="utf-8" />
</head>
<body>
<h1>Album List</h1>
<?php
//Michelle McGinty R00122053

//////////////////////path to link
include 'dbconnection.php'; 

//////////////////link parameters 
$con = mysqli_connect($host, $db_username, $db_password, $DBName);

///////////////////////error handle
if (!$con)
	{ 
	header('Location: error.html'); //redirect to error.html
	die('Could not connect: ' . mysql_error());
}
?>

<a href="EnterNewAlbum.php">Click Here to create a new Album</a>

<?php
/////////////////// table name albums
$TableName = "albums"; 
$result_albums= mysqli_query($con,"SELECT * FROM $TableName ORDER BY albumID" );

/////////////// count how many rows of records exist 
if($count1 = $result_albums->num_rows) 
	{  	// count how many rows of records exist 
		echo "<h1>You have a total of <b>[".$count1."]</b> record(s) </font> </h1>";
	}
	
	////////////////// while there are rows to fetch from the query
	while ($row_albums = mysqli_fetch_assoc($result_albums)) 
	{

		/////////////////assign variables to columns that are getting indexed from the table 
		$albums_result_row_albumID = $row_albums['albumID'];

		$albums_result_row_title = $row_albums['title'];
		$albums_result_row_artist = $row_albums['artist'];
		$albums_result_row_country = $row_albums['country'];
		$albums_result_row_company = $row_albums['company'];
		$albums_result_row_price = $row_albums['price'];
		$albums_result_row_year = $row_albums['year'];

		////// here I echo out the html code for the button and input text ,within php code 

		echo '<table class="table table-fixed">'; // print table 
		echo "<hr>";  // print a line
		
		///////echo the form and button , echo the text box 
		echo '<form method="post"  action="DeleteAlbum.php" name="del_record" id="del_record value="del_record" ">
			  <input type="text"   name="del_rec_id" id="del_rec_id" value="Enter ID" />
			  <input type="submit"  class="button"  action="DeleteAlbum.php" name="del_record" id="del_record" value="Delete" />
			  </form>'; 
	
		echo '<form method="post"  action="UpdateAlbum.php" name="update_record" id="update_record" value="del_record" ">
			  <input type="text"   name="del_rec_id" id="del_rec_id" value="Enter ID" />
			  <input type="submit"  class="button"  action="UpdateAlbum.php" name="update_record" id="update_record" value="Update" />
			  </form>';  // make sure I close my echo with ';

		echo "<tr><td><h3>ID</h3></td><td>".$albums_result_row_albumID."</td></tr>"; // contain elements with table to print
        echo "<tr><td><h3>Title</h3></td><td>".$albums_result_row_title."</td></tr>";
        echo "<tr><td><h3>Full Name</h3></td><td>".$albums_result_row_artist."</td></tr>";
        echo "<tr><td><h3>Country</h3></td><td>".$albums_result_row_country."</td></tr>";
        echo "<tr><td><h3>Company</h3></td><td>".$albums_result_row_company."</td></tr>";
        echo "<tr><td><h3>Price</h3></td><td>".$albums_result_row_price."</td></tr>";
        echo "<tr><td><h3>Year</h3></td><td>".$albums_result_row_year."</td></tr>";			
	}
	
    echo "</table>"// close table tag
?>
</body>
</html>