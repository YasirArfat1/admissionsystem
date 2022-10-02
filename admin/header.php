<?php
session_start();
if (!isset($_SESSION["admin_email"])) 
{
header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="../Bootstrap/CSS/bootstrapmin.css">
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <script type="text/javascript" src="../Bootstrap/JS/BootstrapJQuery.js"></script>
    <script type="text/javascript" src="../Bootstrap/JS/BootstapPoper.js"></script>
    <script type="text/javascript" src="../Bootstrap/JS/Bootstrapminjs.js"></script>
    <style>
        .dropdown-toggle::after {
            content: none;
        }

        .dropdown-menu {
            width: 10px;
            margin-top: 5px;
            padding: 0px 0px 0px 0px;

        }

        .dropdown-item {

            font-size: 16px;

            padding: 2px 0px 0px 12px;

        }

        /* Change this breakpoint if you change the breakpoint of the navbar */

        @media (min-width: 992px) {
            .animate {
                animation-duration: 0.4s;
                -webkit-animation-duration: 0.4s;
                animation-fill-mode: both;
                -webkit-animation-fill-mode: both;
            }
        }

        @keyframes slideIn {
            0% {
                transform: translateY(1rem);
                opacity: 0;
            }

            100% {
                transform: translateY(0rem);
                opacity: 1;
            }

            0% {
                transform: translateY(1rem);
                opacity: 0;
            }
        }


        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: transform;
                -webkit-opacity: 0;
            }

            100% {
                -webkit-transform: translateY(0);
                -webkit-opacity: 1;
            }

            0% {
                -webkit-transform: translateY(1rem);
                -webkit-opacity: 0;
            }
        }

        .slideIn {
            -webkit-animation-name: slideIn;
            animation-name: slideIn;
        }

    </style>




</head>

<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">Online Registration System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">All Admission</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href=""> Hi, <span class=" text-light"><?php echo $_SESSION["fullname"] ?></span></a>
                        </li>

                        <li class="nav-item dropdown  " style="margin-top:-4px">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <?php
                                    require '../connection.php';
                                   
                                $em= $_SESSION["admin_email"];
                            $record = mysqli_query($conn, "SELECT * FROM admin WHERE email='$em'");
                            error_reporting(0);
                            if (count($record) == 1 ) {
                                $n = mysqli_fetch_array($record);
                                $image = $n['Image'];
                               
                                
                        }
                    ?>
                               
                                <img src="admin_Images/<?php echo $image ?>" alt="" style="width:30px ; height:30px; border-radius:100%">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right  animate slideIn" aria-labelledby="navbarDropdown">
                                
                                
                                <a class="dropdown-item" href="admin_account.php">
                                    <i class="fas fa-user " style="color:Green"> </i> My Profile</a>

                                <a class="dropdown-item" href="add_admin.php">
                                    <i class="fa fa-key " aria-hidden="true" style="color:gray"></i> add Admin</a>
                                <a class="dropdown-item" href="add_campus.php">
                                    <i class="fa fa-user-plus" aria-hidden="true" style="color:burlywood"></i>
                                    Add Campus</a>
                                <a class="dropdown-item" href="add_department.php">
                                    <i class="fas fa-database" style="color :chocolate"></i> Add Department</a>

                                <a class="dropdown-item" href="logout.php" onclick="Btnlogut_Click">
                                    <i class="fas fa-sign-out-alt" style="color:firebrick">
                                        logout
                                    </i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
