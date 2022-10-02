<?php

include 'header.php';


 
$message = '';

include('../Connection.php');

$errors = array('fullname'=>'', 'email'=>'', 'username'=>'','password'=>'');
if(isset($_POST['submit'])){
      
    if(empty($_POST['fullname'])){
        $errors['fullname'] = 'An Email is Required <br>';
    }
    
    
    
    if(empty($_POST['email'])){
        $errors['email'] = 'An Email is Required <br>';
    }
    else if(!empty($_POST['email'])){
        $email = $_POST['email'];
        $sql_e = "SELECT * FROM admin WHERE email='$email'";
  	     $res_e = mysqli_query($conn, $sql_e);
        if (mysqli_num_rows($res_e) > 0)
        {
            $errors['email'] = 'This email is already exist <br>';
        }
    }
    else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email msut ba a valid email address';
        }
        
    }
    
    if(empty($_POST['username'])){
        $errors['username'] = 'title is Required <br>';
    }
    else
    {
        $username = $_POST['username'];
        $sql_u = "SELECT * FROM admin WHERE username='$username'";
  	     $res_u = mysqli_query($conn, $sql_u);
        if (mysqli_num_rows($res_u) > 0)
        {
            $errors['username'] = 'This username is already exist <br>';
        }
    }
    
    if(empty($_POST['password'])){
        $errors['password'] = 'title is Required <br>';
    }
    else{
        $title = $_POST['password'];
        if(!preg_match('/^.{8,30}$/', $title)){
             $errors['password'] = 'Password must be Between 8 to 30 chacaters'; 
        }
    }
    
    
    
    if(array_filter($errors))
    {
        
    }
    else
    {
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $imgfile_name = $_FILES['image']['name'];
		$imgfile_temp = $_FILES['image']['tmp_name'];
			move_uploaded_file($imgfile_temp, 'admin_images/'.$imgfile_name);
        $image = $imgfile_name;
        
        
        

        //create sql

        $sql = "INSERT INTO admin (fullname, email, username, password, Image) VALUES ('$fullname', '$email', '$username', '$password','$image')";
        //save to db and check
        
        if(mysqli_query($conn, $sql))
        {
            
            $message = '<div class="alert alert-success">New Admin Successfully Registered later</div>';
        }
        else
        {
            $message = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
            echo 'Query Error'.mysqli_error($conn);
        }

    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | SBBU Online Registeration</title>

    <meta name="keywords" content="Admission open,Download Admission form,admission form,">






</head>

<body>

    <div class="container mb-3 mt-3">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center text-info">New Admin Registeration Form</h3>
                        <hr>
                        <form method="post" action="add_admin.php" class="forms-sample"enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <?php echo $message; ?>
                                </div>
                            </div>
                            <div  class="form-group row">
                                <label class="col-sm-3 col-form-label ">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="fullname" placeholder="Admin Name">
                                    <div class="text-danger"><?php echo $errors['fullname']?></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email or Phone</label>
                                <div class="col-sm-9">
                                    <input type="" class="form-control" name="email" placeholder="Admin Contact">
                                    <div class="text-danger"><?php echo $errors['email']?></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="" class="form-control" name="username" placeholder="Admin Username">
                                    <div class="text-danger"><?php echo $errors['username']?></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" placeholder="Admin Password">
                                    <div class="text-danger"><?php echo $errors['password']?></div>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Upload Photo:</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" required="" value="" id="" name="image">
                            </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-3 ">
                                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                </label>
                                <div class="col-sm-9">
                                    <button type="reset" class="btn btn-danger">Reset</button>

                                </div>
                            </div>

                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include 'footer.php';
?>
