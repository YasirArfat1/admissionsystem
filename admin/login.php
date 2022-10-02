<?php
    include 'loginheader.php';
	require '../connection.php';
	 session_start();

		if (isset($_POST['submit'])) {

			$email = $_POST["EMAIL"];
			$pass = $_POST["PASSWORD"];
			$sql = "SELECT * FROM admin WHERE email = '$email' && password = '$pass'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			if (empty($row)) 
			{
				echo 0;
			}
			else
			{
                
                
				$_SESSION["admin_email"] = $row["email"]; 
				$_SESSION["fullname"] = $row["fullname"];
               
                header("location: index.php");

				echo 1;
			}
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <div class="container">
       
        <div class="row">      
            <div class="col-md-6 mx-auto shadow  mb-4 mt-4">
                <form method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="EMAIL" placeholder="Enter email">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="PASSWORD" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
                
                    </div>
                    </form>
            </div>
        </div>
    </div>

</body>

</html>


<?php include 'footer.php'?>
