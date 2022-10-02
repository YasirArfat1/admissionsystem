<?php
include 'header.php';


 
$id = $_GET['Cid'];

$message = '';

include('../Connection.php');

$errors = array( 'campusname'=>'');
if(isset($_POST['update'])){
      
   
    
    
    
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
        $Cid = mysqli_real_escape_string($conn, $_POST['Cid']);
      

        $sql = "update  campus set  Cname ='$campusname' where Cid='$Cid'";
        //save to db and check
        
        if(mysqli_query($conn, $sql))
        {
            
            	header('location: add_campus.php');
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

        <div class="row mt-4 ">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center text-info">Edit Campus Form</h3>
                        <hr>
                        <?php
                        require '../connection.php';
                        $id = $_GET['Cid'];
                        
            $record = mysqli_query($conn, "SELECT * FROM campus WHERE Cid=$id");
            
            if (mysqli_num_rows($record) == 1 ) {
                $n = mysqli_fetch_array($record);
                $Cid = $n['Cid'];
                $Cname = $n['Cname'];
            }
                    ?>
                        <form method="post" action="edit_campus.php" class="forms-sample" style=" padding: 20px">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <?php echo $message; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label ">Campus Id</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" class="form-control" name="Cid" placeholder="" value="<?php echo $Cid; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Campus Name</label>
                                <div class="col-sm-9">
                                    <input type="" class="form-control" name="campusname" value="<?php echo $Cname; ?>">
                                    <div class="text-danger"><?php echo $errors['campusname']?></div>
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
