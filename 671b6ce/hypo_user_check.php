<?php
include('database_connection.php');
//Include The Database Connection File 

if(isset($_GET['username']))//If a username has been submitted 
	{
		$username = mysql_real_escape_string($_GET['username']);//Some clean up :)

		$check_for_username = mysql_query("SELECT userid FROM users WHERE username='$username'");
			//Query to check if username is available or not 

		if(mysql_num_rows($check_for_username))
			{
				echo 'false';//If there is a  record match in the Database - Not Available
			} else {
				echo 'true';//No Record Found - Username is available 
			}

	}

exit;

?>