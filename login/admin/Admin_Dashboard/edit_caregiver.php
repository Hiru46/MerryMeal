<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];


	$Full_Name = $_POST['Full_Name'];
	$Relationship = $_POST['Relationship'];
	$Email = $_POST['Email'];	
	$Password = $_POST['Password'];


	// update user data
	$result = mysqli_query($mysqli, "UPDATE caregiver SET Full_Name='$Full_Name',Relationship='$Relationship',Email='$Email',Password='$Password' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: caregivers-list.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM caregiver WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	
	
	$Full_Name = $user_data['Full_Name'];
	$Relationship = $user_data['Relationship'];
	$Email = $user_data['Email'];	
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
				<h3 class="mb-2">You Can Edit Care Giver</h3>
				<p></p>
			</div>
			<div class="aside-image" style="background-image:url(images/background/pic1.svg);"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				
					
					


					<div><a href="caregivers-list.php">Go to list of care givers</a><br/><br/>

						<form name="update_user" method="post" action="edit_caregiver.php">
							<table border="0">
								<tr>
									<td>Caregiver Name</td>
									<td><input type="text" name="Full_Name" value=<?php echo $Full_Name;?>></td>
								</tr>
								<tr>
									<td>Relationship</td>
									<td><input type="text" name="Relationship" value=<?php echo $Relationship;?>></td>
								</tr>			        
								<tr>
									<td>Email</td>
									<td><input type="text" name="Email" value=<?php echo $Email;?>></td>
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





