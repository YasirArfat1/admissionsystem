<?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="container mt-4 mb-2">

        <center>
            <h1 class="text-muted" style="font-size:40px;font-family:'Footlight MT'; display:inline">Welcome <span class="text-danger">Admin</span> To Dashboard :)  </h1> 
            
        </center>
        <center>
           <h1 class="text-muted" style="font-size:40px;font-family:'Footlight MT'; display:inline"><span class="text-primary"> <?php echo $_SESSION["fullname"] ?></span>  </h1> 
        </center>

        <center>
            <p style="font-size:35px;font-family:'Footlight MT'" class=" mb-4 mt-3 text-muted ">Hard work beats talent if talent doesn’t
                work hard. <mark>~ Tim Notke</mark>, basketball coach</p>
        </center>

        <div class="row">

            <div class="col-md-3">
                <div class="card">
                <div class="card-header">
                    All Registered
                </div>
                <div class="card-body">
                    <h5 class="card-title">All  Applied </h5>
                    <p class="card-text">click below to see All applied student</p>
                    <a href="allApplied.php" class="btn btn-dark">Click to proced</a>
                </div>
            </div>
            </div>
            
             <div class="col-md-3">
                <div class="card">
                <div class="card-header">
                    All Approved
                </div>
                <div class="card-body">
                    <h5 class="card-title">All Apprved Student</h5>
                    <p class="card-text">click here to see All approved student</p>
                    <a href="allApproved.php" class="btn btn-success">Click to proced</a>
                </div>
            </div>
            </div>
            
             <div class="col-md-3">
                <div class="card">
                <div class="card-header">
                    All Rejected
                </div>
                <div class="card-body">
                    <h5 class="card-title">All Rejected Student</h5>
                    <p class="card-text">click here to see All Rejected student</p>
                    <a href="allRejected.php" class="btn btn-danger">Click to proced</a>
                </div>
            </div>
            </div>
            
            <div class="col-md-3">
                <div class="card">
                <div class="card-header">
                    Add New Admin
                </div>
                <div class="card-body">
                    <h5 class="card-title">Add New Admin Here</h5>
                    <p class="card-text">click here to add New Admin Here</p>
                    <a href="add_admin.php" class="btn btn-info">Click to proced</a>
                </div>
            </div>
            </div>
            
        
         </div>
         <hr>
            <div class="row">

            <div class="col-md-3">
                <div class="card">
                <div class="card-header">
                    Add Campus
                </div>
                <div class="card-body">
                    <h5 class="card-title">Add Campus </h5>
                    <p class="card-text">click below to Add Campus </p>
                    <a href="Add_Campus.php" class="btn btn-dark">Click to proced</a>
                </div>
            </div>
            </div>
            
            <div class="col-md-3">
                <div class="card">
                <div class="card-header">
                    Add Department
                </div>
                <div class="card-body">
                    <h5 class="card-title">Add Department </h5>
                    <p class="card-text">click below to add </p>
                    <a href="Add_Department.php" class="btn btn-primary">Click to proced</a>
                </div>
            </div>
            </div>
            
            <div class="col-md-3">
                <div class="card">
                <div class="card-header">
                    Add Program
                </div>
                <div class="card-body">
                    <h5 class="card-title">Add Program </h5>
                    <p class="card-text">click below to add Program </p>
                    <a href="add_program.php" class="btn btn-danger">Click to proced</a>
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
