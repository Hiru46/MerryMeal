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
				<h3 class="mb-2">You Can Add New Donor</h3>
				<p></p>
			</div>
			<div class="aside-image" style="background-image:url(images/background/pic1.svg);"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				
					
					


					<div><a href="donors-list.php">Go to list of donors</a><br/><br/>

						<form action="add_donor.php" method="post" name="form1">
							<table width="25%" border="0">
								<tr>
									<td>Join_Date</td>
									<td><input type="Join Date" name="Join_Date"></td>
								</tr>
								<tr>
									<td>Donor_Name</td>
									<td><input type="text" name="Donor_Name"></td>
								</tr>            
								<tr>
									<td>Location</td>
									<td><input type="text" name="Location"></td>
								</tr> 
								<tr>
									<td>Donated_Amount</td>
									<td><input type="text" name="Donated_Amount"></td>
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

						
							$Join_Date = $_POST['Join_Date'];
							$Donor_Name = $_POST['Donor_Name'];
							$Location = $_POST['Location'];		
							$Donated_Amount = $_POST['Donated_Amount'];
							
							

							// include database connection file
							include_once("config.php");

							// Insert user data into table
							$result = mysqli_query($mysqli, "INSERT INTO donor(Join_Date,Donor_Name,Location,Donated_Amount) VALUES('$Join_Date','$Donor_Name','$Location','$Donated_Amount')");

							// Show message when user added
							echo "Donor added successfully. <a href='donors-list.php'>View Donors</a>";
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





















<body>

</body>
