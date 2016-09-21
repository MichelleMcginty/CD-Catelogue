<!DOCTYPE html>
<head>
<!-- My CSS link -->
<link href="style.css" rel="stylesheet">
<title>Add a new Album</title>
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
if (!$con) 
	{
	  
		header('Location: error.html'); //redirect to error.html
		die('Could not connect: ' . mysql_error());
	}
?>
<a href="ViewAlbums.php">View Albums</a>
<a href="ViewAlbums.php">Delete Record</a>
<h1>Enter New Album</h1>

<p>Add a Record</p>
<! --- Populate the field with the corresponding values from the table colums  !>
<form method="post" name="add_record" id="add_record" action="EnterNewAlbum.php">
Title  <input type="text" name="title[]" value="title" size="32" required="required" /> </br>
Artist <input type="text" name="artist[]" value="artist" size="32" required="required" /></br>
Country  <input type="text" name="country[]" value="country" size="32" required="required" /></br>
Company <input type="text" name="company[]" value="company" size="32" required="required" /></br>
Price  <input type="text" name="price[]" value="19.99" size="32" required="required" /></br>
Year  <input type="text" name="year[]" value="1997" size="32" required="required" /></br>
<br /><br />
<input type="submit" action="EnterNewAlbum.php"  name="add_record" id="add_record" value="Add" />
</form>

<?php
if(isset($_POST['add_record'])) 
{
	// if the value for the title is true in the text - box run this code
	if(isset($_POST['title']))
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
			echo $value.'-'.$_POST['artist'][$key].'-'.$_POST['country'][$key].'-'.$_POST['company'][$key].'-'.$_POST['price'][$key].'-'.$_POST['year'][$key];
			// I used assigned variables above to pass to the query instead of using $_Post to pass
			$sql2 = mysqli_query($con,"INSERT INTO `albums` ( `title`,`artist`,`country`,`company`,`price`,`year`) VALUES ('".$title."','".$artist."' ,'".$country."','".$company."','".$price."','".$year."' )");
			echo "<h2>Added New Record for the title : $title </h2>";
			echo "<br>";
			echo '<a href="ViewAlbums.php">View Albums</a>
				  <a href="ViewAlbums.php">Delete Record</a>';

		} // end if isset 


	else
	{
	echo "Error Something went wrong";
	} // end else

} // end isset record
?>
</body>
</html>