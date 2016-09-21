<?php
//Michelle McGinty R00122053
//TODO: set to match your database connection details
$host = "localhost";
$DBName = "cdcatalog";
$db_username = "root";
$db_password = "";

//TODO: connect to database
$DBConnection = mysql_connect($host, $db_username, $db_password, $DBName)or die ("unable to connect");

if (!$DBConnection)
	{
		$error ="<p>Unable to connect to the database server.</p>\n"."<p>Connection error code".mysqli_connect_errno()."</p> \n";
		include 'error.html.php'; 
		exit();
    }
	else //connection successful
        
    echo 'Connected successfully to Link';  // print connection is good
	echo "<br>";
           
	//TODO: select database
	$db_select = mysql_select_db($DBName, $DBConnection);
	if(!$db_select)
		{
			echo("cant select database <br/>".mysql_error());
		}
?>