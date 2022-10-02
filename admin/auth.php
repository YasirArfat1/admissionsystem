<?php
	require '../connection.php';
	 session_start();
		if (isset($_POST)) {

			$user = $_POST["USERNAME"];
			$pass = $_POST["PASSWORD"];
			$sql = "SELECT * FROM admin WHERE username = '$user' && password = '$pass'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			if (empty($row)) 
			{
				echo 0;
			}
			else
			{
				$_SESSION["admin_id"] = $row["admin"]; 
				$_SESSION["fullname"] = $row["fullname"];

				echo 1;
			}
		}
?>