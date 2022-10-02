
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container mt-4">
       <center><a href="index.php" class="btn btn-light mb-3 ">Back to DashBoard</a></center>
           <div class="row">
            
            <div class="col-md-3">
              <div class="form-group">
                <input type="text" class="form-control search" id="search" placeholder="What you are looking for ?">
              </div>
            </div>
          

    <div class="col-lg-12">
      <div class="btn btn-dark btn-block mb-2">
          <h5 class="text-center ">All New/Pending Registerations</h5>
      </div>
      <div class="panel-body table-responsive">
        <?php
            require '../connection.php';
            $sql = "SELECT * FROM all_applied WHERE status = 'Pending'";
            $result = $conn->query($sql); 
        ?>
        <table  border="0" class="table table-hover" align="center" id="table">
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>CNIC</th>
            <th>Father Name</th>
            <th>Gender</th>
            <th>Domicile</th>
            <th>Applied For</th>
            <th>Details</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
          <tbody>
            <?php
                $i=1;
                while ($row = $result->fetch_assoc()) 
                {
            ?>
              <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row["fullname"] ?></td>
                  <td><?php echo $row["cnic"] ?></td>
                  <td><?php echo $row["father_name"] ?></td>
                  <td><?php echo $row["gender"] ?></td>
                  <td><?php echo $row["district"] ?></td>
                  <td><?php echo $row["department"] ?></td>
                  <td style="text-align: center; font-size: 20px;">
                    <a href="student_details.php?userID=<?php echo $row["student_id"]?>" title="Record Details">
                      <i class="far fa-address-card" aria-hidden="true" id="" style="color: black"></i>
                    </a>
                  </td>
                  <td style="color: blue"><?php echo $row["status"] ?></td>
                  <td>
                    <form action="rec_processing.php" method="POST">
                      <input type="hidden" name="ID" value="<?PHP echo $row["student_id"]?>">
                      <button class="btn btn-success btn-xs" type="submit" name="Approve">Approve</button>
                      <button class="btn btn-danger btn-xs" type="submit" name="Reject">Reject</button>
                    </form>
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