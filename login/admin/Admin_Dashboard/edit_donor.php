<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];


	$Join_Date = $_POST['Join_Date'];
	$Donor_Name = $_POST['Donor_Name'];
	$Location = $_POST['Location'];	
	$Donated_Amount = $_POST['Donated_Amount'];


	// update user data
	$result = mysqli_query($mysqli, "UPDATE donor SET Join_Date='$Join_Date',Donor_Name='$Donor_Name',Location='$Location',Donated_Amount='$Donated_Amount' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: donors-list.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM donor WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	
	
	$Join_Date = $user_data['Join_Date'];
	$Donor_Name = $user_data['Donor_Name'];
	$Location = $user_data['Location'];	
	$Donated_Amount = $user_data['Donated_Amount'];
}
?>


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
				<h3 class="mb-2">You Can Edit Donor</h3>
				<p></p>
			</div>
			<div class="aside-image" style="background-image:url(images/background/pic1.svg);"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				
					
					


					<div><a href="donors-list.php">Go to list of donors</a><br/><br/>

						<form name="update_user" method="post" action="edit_donor.php">
							<table border="0">
								<tr>
									<td>Join Date</td>
									<td><input type="text" name="Join_Date" value=<?php echo $Join_Date;?>></td>
								</tr>
								<tr>
									<td>Donor Name</td>
									<td><input type="text" name="Donor_Name" value=<?php echo $Donor_Name;?>></td>
								</tr>
								<tr>
									<td>Location</td>
									<td><input type="text" name="Location" value=<?php echo $Location;?>></td>
								</tr>			        
								<tr>
									<td>Donated Amount</td>
									<td><input type="text" name="Donated_Amount" value=<?php echo $Donated_Amount;?>></td>
								</tr>			
								<tr>
									<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
									<td><input type="submit" name="update" value="Update"></td>
								</tr>
							</table>
						</form>

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






