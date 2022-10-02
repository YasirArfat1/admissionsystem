<?php

	$host 		= "localhost";
	$username 	= "root";
	$password 	= "";
	$dbname 	= "regform";

	$conn = new mysqli($host,$username,$password,$dbname);
	if ($conn)
	{ 
		echo ""; 
	}

	else
		
	{
		echo "Connection failed..!".$conn->error;
	}
?>