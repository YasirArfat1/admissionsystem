<?php

	require 'connection.php';
    

	if (isset($_POST["submit"])) {
		# code...
		$imgfile_name = $_FILES['image']['name'];
		$imgfile_temp = $_FILES['image']['tmp_name'];
			move_uploaded_file($imgfile_temp, 'images/'.$imgfile_name);

		$fullname = $_POST["fullname"];
		$status = "Pending";
		$cnic = $_POST["cnic"];
		$fathername = $_POST["fathername"];
		$fathercnic = $_POST["fathercnic"];
		$dob = $_POST["dob"];
		$gender = $_POST["gender"];
		$contact = $_POST["contact"];
		$image = $imgfile_name;
		$nation = $_POST["nation"];
		$province = $_POST["province"];
		$domicile = $_POST["domicile"];
		$address = $_POST["address"];
		$matric = $_POST["matric"];
		$sscmarks = $_POST["sscmarks"];
		$ssctotal = $_POST["ssctotal"];
		$sscboard = $_POST["sscboard"];
		$fsc = $_POST["fsc"];
		$fscmarks = $_POST["fscmarks"];
		$fsctotal = $_POST["fsctotal"];
		$fscboard = $_POST["fscboard"];
		$campus = $_POST["campus"];
		$applyprogram = $_POST["applyprogram"];
		$department = $_POST["department"];

		$sql = "INSERT INTO all_applied
		(status, fullname, cnic, father_name, father_cnic, dob,gender, contact, photo, nationality, province, district, address, ssc, ssc_marks, ssc_total, ssc_institute, hssc, hssc_marks, hssc_total, hssc_institute, campus, applying_for, department)
		VALUES
		('$status' , '$fullname' , '$cnic' , '$fathername' , '$fathercnic' , '$dob' , '$gender' , '$contact' , '$image' , '$nation' , '$province' , '$domicile' , '$address' , '$matric' , '$sscmarks' , '$ssctotal' , '$sscboard' , '$fsc' , '$fscmarks' , '$fsctotal' , '$fscboard' ,'$campus', '$applyprogram' , '$department')";
		
		$result = $conn->query($sql);
		if ($result) 
		{
			header('location: newApply.php');
		}
		else
		{
			echo "Failed".$conn->error;
		}
	}
?>
<?php
include 'header.php';
?>
<body>
 <div class="container mb-5">
     

        <div class="row">
            <div class="offset-md-2 col-md-8"><br>
                <h3 class="text-center">Enter Your Detail Information</h3>
                <hr>
                <div class="total-form-div container" style="background-color: #5d532f42; padding-top: 25px;  padding-left: 80px; padding-right: 80px; border-radius: 30px;">
                    <form  method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <select name="campus" required class="form-control">
                            <option>Select Campus</option>
                                    <?php
                                    
                                        $query = "select * from `campus`";
                                        $result = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($result))
                                        {
                                        ?>

                                        <option value="<?php echo $row['Cid']; ?>"><?php echo $row['Cname']; ?></option>

                                    <?php } ?>
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" required="" name="department">
                                    <option>Select Department</option>
                                    <?php
                                        $query = "select * from `department`";
                                        $result = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($result))
                                        {
                                        ?>

                                        <option value="<?php echo $row['Did']; ?>"><?php echo $row['Dname']; ?></option>

                                    <?php } ?>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Aplying For (Program)</label>
                            <select class="form-control" required="" name="applyprogram">
                                <option>Select Program</option>
                                <?php
                                        $query = "select * from `Program`";
                                        $result = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($result))
                                        {
                                        ?>

                                        <option value="<?php echo $row['Pid']; ?>"><?php echo $row['Pname']; ?></option>

                                    <?php } ?>
                            </select>
                        </div>
                        <hr><br>
                        <div class="form-group">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" required="" placeholder="Type full name" id="" name="fullname">
                        </div>
                        <div class="form-group">
                            <label>CNIC:</label>
                            <input type="number" class="form-control" required="" placeholder="Type CNIC" id="" name="cnic">
                        </div>
                        <div class="form-group">
                            <label>Father Name:</label>
                            <input type="text" class="form-control" required="" placeholder="Type father name" id="" name="fathername">
                        </div>
                        <div class="form-group">
                            <label>Father CNIC:</label>
                            <input type="number" class="form-control" required="" placeholder="Type father CNIC" id="" name="fathercnic">
                        </div>
                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <input type="date" class="form-control" required="" id="" name="dob">
                        </div>
                        <div class="form-group">
                            <label>Gender:</label>
                            <select class="form-control" required="" name="gender">
                                <option>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contact #:</label>
                            <input type="number" class="form-control" required="" placeholder="Type contact number" id="" name="contact">
                        </div>
                        <div class="form-group">
                            <label>Upload Photo:</label>
                            <input type="file" class="form-control" required="" value="" id="" name="image">
                        </div><br><br>
                        <div class="form-group">
                            <p class="form-control block btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Enter Address Information</p>
                        </div>

                        <!-- Address section starts Here -->

                        <div class="collapse" id="collapseExample">
                            <h3 class="text-center">Enter Your Address Information</h3>
                            <div class="form-group">
                                <label>Nationality</label>
                                <select class="form-control" required="" name="nation">
                                    <option value="">Select Nationality</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Foriegn">Foreign</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Province:</label>
                                <select class="form-control" required="" name="province">
                                    <option>Select Province</option>
                                    <option value="KPK">Khyber Pakhtunkhwa</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Baloch">Balochistan</option>
                                    <option value="Sindh">Sindh</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Domicile District</label>
                                <input type="text" class="form-control" required="" placeholder="District" name="domicile">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" required="" cols="100" rows="3" name="address"></textarea>
                            </div><br><br>
                            <div class="form-group">
                                <p class="form-control block btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">Enter Acedamic Details</p>
                            </div>
                        </div>

                        <!-- Acedamic section starts here -->

                        <div class="collapse" id="collapseExample2">
                            <h3 class="text-center">Enter Your Acedamic Details</h3>
                            <br>
                            <h4>SSC (Matric)</h4>
                            <div class="form-group">
                                <label>SSC (Matric)</label>
                                <select class="form-control" required="" name="matric">
                                    <option>Select Matric Field</option>
                                    <option value="Science">Science</option>
                                    <option value="Arts">Arts</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Obtained Marks</label>
                                <input type="number" name="sscmarks" class="form-control" required="" placeholder="Obtained marks">
                            </div>
                            <div class="form-group">
                                <label>Total Marks</label>
                                <input type="number" name="ssctotal" class="form-control" required="" placeholder="Total marks">
                            </div>
                            <div class="form-group">
                                <label>Board/Institution</label>
                                <input type="text" name="sscboard" class="form-control" required="" placeholder="board">
                            </div>
                            <br>
                            <hr><br>
                            <h4>Intermediate</h4>
                            <div class="form-group">
                                <label>HSSC (Intermediate)</label>
                                <select class="form-control" required="" name="fsc">
                                    <option>Select HSSC Field</option>
                                    <option value="CSc">Computer Science</option>
                                    <option value="Pre-Engineering">Pre-Engineering</option>
                                    <option value="Pre-Medical">Pre-Medical</option>
                                    <option value="Arts">Arts</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Obtained Marks</label>
                                <input type="number" name="fscmarks" class="form-control" required="" placeholder="Obtained marks">
                            </div>
                            <div class="form-group">
                                <label>Total Marks</label>
                                <input type="number" name="fsctotal" class="form-control" required="" placeholder="Total marks">
                            </div>
                            <div class="form-group">
                                <label>Board/Institution</label>
                                <input type="text" name="fscboard" class="form-control" required="" placeholder="board">
                            </div>
                        </div>
                        <hr><br>
                        <button type="submit" class="btn btn-success" value="submit" name="submit">Submit Application</button>
                        <button type="reset" class="btn btn-danger" style="float: right;">Reset Form Data</button>
                        <br>
                        <hr><br>
                    </form>
                    <!-- Main form Ends here -->
                </div>
            </div>
        </div>
        
    </div>
</body>
<?php
include 'footer.php';
?>
