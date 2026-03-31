<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MerryMeal - Restaurant Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link href="./css/sweetalert2.min.css" rel="stylesheet">
	<link href="./css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-4 pt-5">
					<img src="../../Yx9l.gif" width="214" height="214">
				</div>
				<h3 class="mb-2">You Can Add New Volunteer</h3>
				<p></p>
			</div>
			<div class="aside-image" style="background-image:url(images/background/pic1.svg);"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				
					
					


					<div><a href="volunteers-list.php">Go to list of volunteers</a>
						<br/><br/>

						<form action="add_volun.php" method="post" name="form1">
							<table width="25%" border="0">
								<tr>
									<td>Volunteer_Name</td>
									<td><input type="text" name="fullName"></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><input type="text" name="address"></td>
								</tr>
								<tr>
									<td>Gender</td>
									<td><input type="text" name="gender"></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="text" name="email"></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input type="text" name="password"></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="Submit" value="Add"></td>
								</tr>
							</table>
						</form>

						<?php

						// Check If form submitted, insert form data into users table.
						if(isset($_POST['Submit'])) {		

							$fullName = $_POST['fullName'];
							$address = $_POST['address'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$password = $_POST['password'];

							// include database connection file
							include_once("config.php");

							// Insert user data into table
							$result = mysqli_query($mysqli, "INSERT INTO volunteer(fullName,address,gender,email,password) VALUES('$fullName','$address','$gender','$email','$password')");

							// Show message when user added
							echo "Volunteer added successfully. <a href='volunteers-list.php'>View Volunteers</a>";
						}
						?>
                    </div>



							
							



			</div>
		</div>
	</div>

<!--**********************************
	Scripts
***********************************-->
	<!-- Required vendors -->
	<script src="./js/global.min.js"></script>
	<script src="./js/bootstrap-select.min.js"></script>
	<script src="./js/custom.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<!-- Jquery Validation -->
    <script src="./js/jquery.validate.min.js"></script>
	
	<script src="./js/login-form.js"></script>
	<script src="./js/deznav-init.js"></script>
</body>
</html>









