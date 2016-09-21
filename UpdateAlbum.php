<!DOCTYPE html>
<head>
<!-- My CSS link -->
<link href="style.css" rel="stylesheet">
<title>Update an Album</title>
<meta charset="utf-8" />
</head>
<body>
<?php
//Michelle McGinty R00122053

//////////path to link
include 'dbconnection.php'; 

/////////link parameters 
$con = mysqli_connect($host, $db_username, $db_password, $DBName);

//////error handle
if (!$con) {
  
	header('Location: error.html'); //redirect to error.html
	die('Could not connect: ' . mysql_error());
}
?>
<a href="ViewAlbums.php">View Albums</a>
<a href="ViewAlbums.php">Delete Record</a>

<h2>Original Existing Album</h2>

<?php
session_start();

if(isset($_POST['update_record']))
{

	$row_id = $_POST['del_rec_id'];
	$_SESSION['del_rec_id']=$_POST['del_rec_id'];
	////// table name albums
	$TableName = "albums"; 
	$result_albums= mysqli_query($con,"SELECT * FROM $TableName  where albumID='".$row_id."'" );
	
	////// while there are rows to fetch from the query
	while ($row_albums = mysqli_fetch_assoc($result_albums)) 
	{

		$albums_result_row_albumID = $row_albums['albumID'];
	
		//////assign variables to columns that are getting indexed from the table 
		echo "Original  Record for ";
		echo "id = ".$albums_result_row_id = $row_albums['albumID'];
		$_SESSION['albumID'] = $row_albums['albumID'];
		echo "Title = ".$albums_result_row_title = $row_albums['title'];

		echo "--";
		echo "Artist= ".$albums_result_row_artist = $row_albums['artist'];

		echo "--";
		echo "Country = ".$albums_result_row_country = $row_albums['country'];

		echo "--";
		echo "Company = ".$albums_result_row_company = $row_albums['company'];

		echo "--";
		echo "Price = ".$albums_result_row_price = $row_albums['price'];

		echo "--";
		echo "Year = ".$albums_result_row_year = $row_albums['year'];

		
		echo '<form method="post" name="add_record" id="add_record" action="UpdateAlbum.php">
				Title <input type="text" name="title" value="'.$albums_result_row_title.'" size="32" required="required" > </br>
				Artist <input type="text" name="artist[]" value="'.$albums_result_row_artist.'" size="32" required="required" /></br>
				Country <input type="text" name="country[]" value="'.$albums_result_row_country.'" size="32" required="required" /></br>
				Company <input type="text" name="company[]" value="'.$albums_result_row_company.'" size="32" required="required" /></br>
				Price <input type="text" name="price[]" value="'.$albums_result_row_price.'" size="32" required="required" /></br>
				Year <input type="text" name="year[]" value="'.$albums_result_row_year.'" size="32" required="required" /></br>
		<br /><br />

		</form>';

	}


}
echo "<hr>";
echo "<h2>Fill in the Changes below , Click Update to apply</h2>";
?>
<form method="post" name="add_record" id="add_record" action="UpdateAlbum.php">
	Title <input type="text" name="title[]" value="" size="32" required="required" ></br>
	Artist <input type="text" name="artist[]" value="" size="32" required="required" /></br>
	Country <input type="text" name="country[]" value="" size="32" required="required" /></br>
	Company <input type="text" name="company[]" value="" size="32" required="required" /></br>
	Price <input type="text" name="price[]" value="" size="32" required="required" /></br>
	Year <input type="text" name="year[]" value="" size="32" required="required" /></br>
<br /><br />
<input type="submit" class="button" action="update_album.php"  name="update_recordadd" id="update_recordadd" value="Update" />
<?php

if(isset($_POST['update_recordadd'])) 
{

    $title = $_POST['title'];
		
	// create and index a key for each value
    foreach ($title as $key => $value)
	{
		$value.'-'.$_POST['title'][$key].'-'.$_POST['artist'][$key].'-'.$_POST['country'][$key].'-'.$_POST['company'][$key].'-'.$_POST['price'][$key].'-'.$_POST['year'][$key];
		
		echo "<br>";
		$title = $_POST['title'][$key];//I assigned variables to check if each index key  is printing with echo the correct key
		///// value for the name artist
		$artist = $_POST['artist'][$key];
		///// value for the name country
		$country = $_POST['country'][$key];
		//////value for the name country
		$company = $_POST['company'][$key];
		//////value for the name price
		$price = $_POST['price'][$key];
		///// value for the name year
		$year= $_POST['year'][$key];

	}
	echo "<h2>Information Added:</h2>";
	$value.'-'.$_POST['artist'][$key].'-'.$_POST['country'][$key].'-'.$_POST['company'][$key].'-'.$_POST['price'][$key].'-'.$_POST['year'][$key];

	$TableName = "albums"; 
	$update = mysqli_query($con, "UPDATE  $TableName SET title='".$title."' , artist='".$artist."' , country='".$country."' , company='".$company."',  price='".$price."', year='".$year."'  WHERE albumID='".$_SESSION['albumID']."'  ");

	$result_albums= mysqli_query($con,"SELECT * FROM $TableName  where albumID='".$_SESSION['albumID']."'" );
	///// while there are rows to fetch from the query
	while ($row_albums = mysqli_fetch_assoc($result_albums)) 
	{
	
		$albums_result_row_albumID = $row_albums['albumID'];

		/////assign variables to columns that are getting indexed from the table 
		echo "New Most recently Updated  Record for ";
		echo "id = ".$albums_result_row_id = $row_albums['albumID'];
		$_SESSION['albumID'] = $row_albums['albumID'];
		
		echo "Title = ".$albums_result_row_title = $row_albums['title'];

		echo "--";
		echo "Artist= ".$albums_result_row_artist = $row_albums['artist'];

		echo "--";
		echo "Country = ".$albums_result_row_country = $row_albums['country'];

		echo "--";
		echo "Company = ".$albums_result_row_company = $row_albums['company'];

		echo "--";
		echo "Price = ".$albums_result_row_price = $row_albums['price'];

		echo "--";
		echo "Year = ".$albums_result_row_year = $row_albums['year'];

		echo "<h1>Updated Record</h1>";

		echo "<h1>Success!!</h1>";

	}
}
?>
</body>
</html>