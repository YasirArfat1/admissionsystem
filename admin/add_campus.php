<?php

include 'header.php';


$message = '';

include('../Connection.php');

$errors = array( 'campusname'=>'');
if(isset($_POST['submit'])){
      
   
    
    
    
    if(empty($_POST['campusname'])){
        $errors['campusname'] = 'Campus Name is Required <br>';
    }
    else 
    {
      
        
        $campusname = $_POST['campusname'];
        $sql_e = "SELECT * FROM campus WHERE Cname='$campusname'";
  	     $res_e = mysqli_query($conn, $sql_e);
        if (mysqli_num_rows($res_e) > 0)
        {
            $errors['campusname'] = 'This Campus is already exist <br>';
        }
    }
    
    
    
    if(array_filter($errors))
    {
        
    }
    else
    {
        
        $campusname = mysqli_real_escape_string($conn, $_POST['campusname']);
      

        //create sql

        $sql = "INSERT INTO campus (Cname) VALUES ('$campusname')";
        //save to db and check
        
        if(mysqli_query($conn, $sql))
        {
            
            $message = '<div class="alert alert-success">New Campus Successfully added </div>';
        }
        else
        {
            $message = '<div class="alert alert-danger">Sorry there are some Eroors</div>';
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
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Click Here to Add New Campus
        </button>
        <div class="row mt-4 collapse" id="collapseExample">
            <div class="col-md-8 mx-auto shadow">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center text-info">Add Campus Form</h3>
                        <hr>
                        <form method="post" action="add_Campus.php" class="forms-sample" style=" padding: 20px">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <?php echo $message; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label ">Campus Id</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" class="form-control" name="fullname" placeholder="Campus Id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Campus Name</label>
                                <div class="col-sm-9">
                                    <input type="" class="form-control" name="campusname" placeholder="Campus name">
                                    <div class="text-danger"><?php echo $errors['campusname']?></div>
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
        <hr>
        <div class="row mt-4 mb-4">
            <div class="col-lg-8 mx-auto">
                <div class="btn btn-dark btn-block mb-2">
                    <h5 class="text-center ">All Campuses </h5>
                </div>
                <div class="panel-body table-responsive">
                    <?php
            require '../connection.php';
            $sql = "SELECT * FROM Campus";
            $result = $conn->query($sql); 
        ?>
                    <table border="0" class="table table-hover" align="center" id="table">
                        <tr class="text-center">
                            <th>Campus Id</th>
                            <th>Campus Name</th>
                            <th>Actions</th>
                        </tr>
                        <tbody>
                            <?php
                $i=1;
                while ($row = $result->fetch_assoc()) 
                {
            ?>
                            <tr class="text-center">

                                <td><?php echo $row["Cid"] ?></td>
                                <td><?php echo $row["Cname"] ?></td>

                                <td style="text-align: center; font-size: 20px;">
                                    <a href="edit_campus.php?Cid=<?php echo $row["Cid"]?>" title="Record Details">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php      
                  }
                ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
<?php
include 'footer.php';
?>
