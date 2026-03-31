<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];


	$Fullname = $_POST['Fullname'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$Contact = $_POST['Contact'];
	$Age = $_POST['Age'];
	$NIC = $_POST['NIC'];
	$Driverable_Vehicles = $_POST['Driverable_Vehicles'];
	$License = $_POST['License'];
	$Certificate = $_POST['Certificate'];	
	$Password = $_POST['Password'];


	// update user data
	$result = mysqli_query($mysqli, "UPDATE rider SET Fullname='$Fullname',Email='$Email',Address='$Address',Contact='$Contact',Age='$Age',NIC='$NIC',Driverable_Vehicles='$Driverable_Vehicles',License='$License',Certificate='$Certificate',Password='$Password' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: riders-list.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM rider WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	
	
	$Fullname = $user_data['Fullname'];
	$Email = $user_data['Email'];
	$Address = $user_data['Address'];
	$Contact = $user_data['Contact'];
	$Age = $user_data['Age'];
	$NIC = $user_data['NIC'];
	$Driverable_Vehicles = $user_data['Driverable_Vehicles'];
	$License = $user_data['License'];
	$Certificate = $user_data['Certificate'];	
	$Password = $user_data['Password'];
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
				<h3 class="mb-2">You Can Edit Rider</h3>
				<p></p>
			</div>
			<div class="aside-image" style="background-image:url(images/background/pic1.svg);"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				
					
					


					<div><a href="riders-list.php">Go to list of riders</a><br/><br/>

						<form name="update_user" method="post" action="edit_rider.php">
							<table border="0">
								<tr>
									<td>Rider Name</td>
									<td><input type="text" name="Fullname" value=<?php echo $Fullname;?>></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="text" name="Email" value=<?php echo $Email;?>></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><input type="text" name="Address" value=<?php echo $Address;?>></td>
								</tr>
								<tr>
									<td>Contact</td>
									<td><input type="text" name="Contact" value=<?php echo $Contact;?>></td>
								</tr>
								<tr>
									<td>Age</td>
									<td><input type="text" name="Age" value=<?php echo $Age;?>></td>
								</tr>
								<tr>
									<td>NIC</td>
									<td><input type="text" name="NIC" value=<?php echo $NIC;?>></td>
								</tr>
								<tr>
									<td>Driverable Vehicles</td>
									<td><input type="text" name="Driverable_Vehicles" value=<?php echo $Driverable_Vehicles;?>></td>
								</tr>						
								<tr>
									<td>License</td>
									<td><input type="text" name="License" value=<?php echo $License;?>></td>
								</tr>
								<tr>
									<td>Certificate</td>
									<td><input type="text" name="Certificate" value=<?php echo $Certificate;?>></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input type="text" name="Password" value=<?php echo $Password;?>></td>
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












