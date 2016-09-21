<!DOCTYPE html>
<head>
<!-- My CSS link -->
<link href="style.css" rel="stylesheet">
<title>Delete a new Album</title>
<meta charset="utf-8" />
</head>
<body>
<?php
//Michelle McGinty R00122053

///////////path to link
include 'dbconnection.php'; 

//////////link parameters 
$con = mysqli_connect($host, $db_username, $db_password, $DBName);

/////////error handle
if (!$con)
	{
		header('Location: error.html'); //redirect to error.html
		die('Could not connect: ' . mysql_error());
	}

///////// if the button for deletion is true
if (isset($_POST['del_record'])) 
{
	$TableName = "albums"; 
	// give the id record number a variable so I can use it my del query below
	$row_id = $_POST['del_rec_id'];
	
		// query the DB and delete the row with the id
		$del = mysqli_query($con, "DELETE FROM $TableName WHERE albumID='".$row_id."'  ");
		echo " <h1> Deleted Success!  </h1> "; // print message 
		echo '<a href="ViewAlbums.php">View Album</a>
			  <a href="EnterNewAlbum.php">Enter a new Album</a>';
}
?>