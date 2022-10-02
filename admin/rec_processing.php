<?php
	require '../connection.php';

/*From All Applied Table*/


		if (isset($_POST['Approve'])) {
			
			$ID = $_POST['ID'];
			$status = 'Approved';

			$sql = "UPDATE all_applied SET `status` = '$status' WHERE `student_id` = '$ID'";

			$result = $conn->query($sql);
				if ($result) 
				{
					header("Location: allApplied.php");
				}
				else
				{
					echo "Failed".$conn->error;
				}
		}


		if (isset($_POST['Reject'])) {
			
			$ID = $_POST['ID'];
			$status = 'Rejected';

			$sql = "UPDATE all_applied SET `status` = '$status' WHERE `student_id` = '$ID'";

			$result = $conn->query($sql);
				if ($result) 
				{
					header("Location: allApplied.php");
				}
				else
				{
					echo "Failed".$conn->error;
				}
		}


/*Rejection From Approved Table*/

	if (isset($_POST['RejectBack'])) {
			
			$ID = $_POST['ID'];
			$status = 'Rejected';

			$sql = "UPDATE all_applied SET `status` = '$status' WHERE `student_id` = '$ID'";

			$result = $conn->query($sql);
				if ($result) 
				{
					header("Location: allApproved.php");
				}
				else
				{
					echo "Failed".$conn->error;
				}
		}



/*Approving From Rejected Table*/

	if (isset($_POST['ApproveBack'])) {
			
			$ID = $_POST['ID'];
			$status = 'Approved';

			$sql = "UPDATE all_applied SET `status` = '$status' WHERE `student_id` = '$ID'";

			$result = $conn->query($sql);
				if ($result) 
				{
					header("Location: allRejected.php");
				}
				else
				{
					echo "Failed".$conn->error;
				}
		}



?>