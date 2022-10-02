<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-6 mx-auto shadow">
                <h5 class="text-center text-muted">Admin Account details</h5>
                <hr>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <?php
                            require '../connection.php';

                            $em= $_SESSION["admin_email"];
                            $record = mysqli_query($conn, "SELECT * FROM admin WHERE email='$em'");
                            error_reporting(0);
                            if (count($record) == 1 ) {
                            $n = mysqli_fetch_array($record);
                            $name= $n['fullname'];
                            $email = $n['email'];
                            $uname = $n['username'];
                            $pass = $n['password'];   
                            $image= $n['Image'];
                                
                        }
                    ?>
                        <img src="admin_Images/<?php echo $image?>" class="img-fluid ml-3 rounded-circle" style="height:200px" alt="image">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-muted">Name</h5>
                        <h5>
                            <h5 class="text-primary"><?php echo $name?></h5>
                        </h5>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-muted">Email</h5>
                        <h5>
                            <h5 class="text-primary"><?php echo $email?></h5>
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-muted">Password</h5>
                        <h5>
                            <h5 class="text-primary"><?php echo $pass?></h5>
                        </h5>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-muted">username</h5>
                        <h5>
                            <h5 class="text-primary"><?php echo $uname?></h5>
                        </h5>
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <button class="btn btn-dark w-100" data-toggle="collapse" data-target="#demo"> click here to Update account details</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4 collapse" id="demo">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center text-info">Edit Account Form</h3>
                        <hr>

                        <form method="post" action="edit_campus.php" class="forms-sample" style=" padding: 20px">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <?php echo $message; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label ">Name</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" name="Cid" placeholder="" value="<?php echo $name; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="" readonly="true" class="form-control" name="campusname" value="<?php echo $email; ?>">
                                    <div class="text-danger"><?php echo $errors['email']?></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type=""  class="form-control" name="campusname" value="<?php echo $email; ?>">
                                    <div class="text-danger"><?php echo $errors['email']?></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 ">
                                    <button type="submit" name="update" class="btn btn-warning">Update Campus</button>
                                </label>
                                <div class="col-sm-9">
                                    <a href="Add_Campus.php" class="btn btn-dark">back to All Campuses</a>
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
