<?php
	require '../connection.php';
	if (isset($_POST["submit"])) {

		$fullname = $_POST["fullname"];
		$contact = $_POST["contact"];
		$username = $_POST["username"];
		$password = $_POST["password"];


		$sql = "INSERT INTO admin (fullname, contact, username, password) VALUES ('$fullname', '$contact', '$username', '$password')";


		$result = $conn->query($sql);
		if ($result) 
		{
			header("Location: index.php");
		}
		else
		{
			echo "Failed".$conn->error;
		}
	}
?>