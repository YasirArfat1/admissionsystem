<?php

	require 'connection.php';

	if (isset($_POST["submit"])) {
		# code...
		$imgfile_name = $_FILES['image']['name'];
		$imgfile_temp = $_FILES['image']['tmp_name'];
			move_uploaded_file($imgfile_temp, 'images/'.$imgfile_name);

		$fullname = $_POST["fullname"];
		$status = "Pending";
		$cnic = $_POST["cnic"];
		$fathername = $_POST["fathername"];
		$fathercnic = $_POST["fathercnic"];
		$dob = $_POST["dob"];
		$gender = $_POST["gender"];
		$contact = $_POST["contact"];
		$image = $imgfile_name;
		$nation = $_POST["nation"];
		$province = $_POST["province"];
		$domicile = $_POST["domicile"];
		$address = $_POST["address"];
		$matric = $_POST["matric"];
		$sscmarks = $_POST["sscmarks"];
		$ssctotal = $_POST["ssctotal"];
		$sscboard = $_POST["sscboard"];
		$fsc = $_POST["fsc"];
		$fscmarks = $_POST["fscmarks"];
		$fsctotal = $_POST["fsctotal"];
		$fscboard = $_POST["fscboard"];
		$campus = $_POST["campus"];
		$applyprogram = $_POST["applyprogram"];
		$department = $_POST["department"];

		$sql = "INSERT INTO all_applied
		(status, fullname, cnic, father_name, father_cnic, dob,gender, contact, photo, nationality, province, district, address, ssc, ssc_marks, ssc_total, ssc_institute, hssc, hssc_marks, hssc_total, hssc_institute, campus, applying_for, department)
		VALUES
		('$status' , '$fullname' , '$cnic' , '$fathername' , '$fathercnic' , '$dob' , '$gender' , '$contact' , '$image' , '$nation' , '$province' , '$domicile' , '$address' , '$matric' , '$sscmarks' , '$ssctotal' , '$sscboard' , '$fsc' , '$fscmarks' , '$fsctotal' , '$fscboard' ,'$campus', '$applyprogram' , '$department')";
		
		$result = $conn->query($sql);
		if ($result) 
		{
			header('location: newApply.php');
		}
		else
		{
			echo "Failed".$conn->error;
		}
	}
?>