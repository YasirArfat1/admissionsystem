
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admission Form </title>
    
    <meta name="keywords" content="Admission open,Download Admission form,admission form,">
    

  <script src="js/jquery.min.js.js"></script>
  
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	body{
    background-color: #525252;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
	</style>
</head>

<body>

 <nav class="navbar navbar-default mega-nav" style=" border-radius:0px;">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#MainMenu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="MainMenu">
            <ul class="nav navbar-nav menu-list">
             

                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Apply </a></li>
                <li><a href="status.php"> Apply Status</a></li>     
              
            </ul>
           
        </div>
        </div>
    </nav>
    

<div class="container">

  <div class="panel panel-danger">
<div class="panel-body">
<br>
   <form method="post" action="status.php">
 <div class="row">
 <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" style=" font-size:24px; padding-left:5px;">  Your Name </div>
 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
 <input type="text" name="status" class="form-control" required placeholder='Enter Your Name'>
 </div>
 
  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" style=" font-size:24px; padding-left:5px;">  Father Name </div>
 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
 <input type="text" name="fname" class="form-control" required placeholder='Enter Your Father Name'>
 </div>
 
 <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
 <input type="submit" name="search" class="btn btn-info" value="Search" >
 </div>
   </div>
   </form><br><br>

  
  
<?php


mysql_connect('localhost', 'root', '');
mysql_select_db('form');


if (isset($_POST['search']))
{
	 $search=$_REQUEST['status'];
	 $fname=$_REQUEST['fname'];

					$query="select * from admission where name LIKE '%$search%' and fname LIKE '%$fname%'";
					$run=mysql_query($query);
	  if($run == '')
	{
		echo "<div class='alert alert-danger h2' align='center'> No Data found </div>";	
	}
	else
	{
					while($row=mysql_fetch_array($run))
			{
										
$id=$row['id'];
$name=$row['name'];
$fname=$row['fname'];
$dept=$row['dept'];
$gender=$row['mobile'];	
$status=$row['status'];						                               
		
  ?>
  
  
  <div class="table-responsive" align="center">
  <table class="table">
     <tr class="info">
       <th>  Student Id  </th>
        <th>  Name  </th>
         <th>  Father Name  </th>
         <th>  Class  </th>
        <th>  Gender </th>
      <th>  Status </th>
    </tr>
    
    
     <tr>
       <th>  <?php echo $id; ?>  </th>
        <th>  <?php echo $name; ?>  </th>
         <th>  <?php echo $fname; ?>  </th>
         <th>  <?php echo $dept; ?>  </th>
        <th>  <?php echo $gender; ?>  </th>
      <th>  <?php echo "<div class='btn btn-info btn-lg'>$status</div>"; ?>  </th>
    </tr>
  </table>
 </div>
  
  
  <?php  }}} ?>
   
 </div>
 <!-- Validate Plugin -->
  <script src="js/jquery.validate.min.js"></script>
<script src="js/condition.js"> </script>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    

</body>
</html>

