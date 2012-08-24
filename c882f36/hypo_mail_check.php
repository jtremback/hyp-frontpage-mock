<?php
include('database_connection.php');
//Include The Database Connection File 

if(isset($_GET['email']))//If a username has been submitted 
	{
		$email = mysql_real_escape_string($_GET['email']);//Some clean up :)

		$check_for_email = mysql_query("SELECT userid FROM users WHERE email='$email'");
			//Query to check if username is available or not 

		if(mysql_num_rows($check_for_email))
			{
				echo 'false';//If there is a  record match in the Database - Not Available
			} else {
				echo 'true';//No Record Found - Username is available 
			}

	}

exit;

?>