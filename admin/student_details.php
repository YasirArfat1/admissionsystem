<?php

include 'header.php';

 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | SBBU Online Registeration</title>
</head>


<?php
    require '../connection.php';
    $ID = $_GET["userID"];
      $sql = "SELECT * FROM all_applied WHERE student_id = '$ID'";
      $result = $conn->query($sql); 
?>


<body>
    <div>
        <div class="container mt-4 shadow ">

            <h3 class="text-center text-muted "> Student Detailed Information</h3>

            <?php
    while ($row = $result->fetch_assoc()) 
    {
?>

            <div class="row">
                <div class="col-md-2 mx-auto">
                    
                        <img width="160" height="190" src="../images/<?php echo $row["photo"]?>" alt="Student Image">
                    
                </div>
            </div>
            <h4 class="text-info">Personal Details</h4>
            <hr>

            <div class="row">
                <div class="col-md-6">

                    <h5>Full Name : <span><?php echo $row["fullname"] ?></span></h5>
                    <h5>Father Name : <?php echo $row["father_name"] ?></h5>
                    <h5>Date of Birth : <?php echo $row["dob"] ?></h5>
                    <h5>Contact : <?php echo $row["contact"] ?></h5>
                    <h5>Province : <?php echo $row["province"] ?></h5>
                    <h5>Address : <?php echo $row["address"] ?></h5>
                </div>
                <div class="col-md-6">
                    <h5>CNIC : <?php echo $row["cnic"]?></h5>
                    <h5>Father CNIC : <?php echo $row["father_cnic"] ?></h5>
                    <h5>Gender : <?php echo $row["gender"] ?></h5>
                    <h5>Nationality : <?php echo $row["nationality"] ?></h5>
                    <h5>District : <?php echo $row["district"] ?></h5>
                </div>
            </div>

            <h4 class="mt-4  text-success">Acedamic Details</h4>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h5>Matric</h5>
                    <h5>Subject : <?php echo $row["ssc"] ?></h5>
                    <h5>Board : <?php echo $row["ssc_institute"] ?></h5>
                    <h5>Intermediate</h5>
                    <h5>Subject : <?php echo $row["hssc"] ?></h5>
                    <h5>Board</h5>
                </div>
                <div class="col-md-6">
                    <br><br>
                    <h5>Marks : <?php echo $row["ssc_marks"] ?></h5>
                    <h5>Total : <?php echo $row["ssc_total"] ?></h5>
                   
                    <h5>Marks : <?php echo $row["hssc_marks"] ?></h5>
                    <h5>Total : <?php echo $row["hssc_total"] ?></h5>
                    <br>
                </div>
            </div>
            
            
            <h4 class="mt-4 text-warning">Application Details</h4>
            <hr>
            
            <div class="row">
                <div class="col-md-6">
                    <h5>Applied in Campus : <?php echo $row["campus"] ?></h5>
                    <h5>Program : <?php echo $row["applying_for"] ?></h5>
                </div>
                <div class="col-md-6">
                    
                    <h5>Applied for : <?php echo $row["department"] ?></h5>
                </div>
               
            </div>
            <br><br>
        </div>
        <?php
        
} 
      ?>
    </div>

</body>

</html>
<?php
include 'footer.php';
?>
