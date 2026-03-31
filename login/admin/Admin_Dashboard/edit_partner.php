<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];

	
    $Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
    $Contact = $_POST['Contact'];
    $Qualifications = $_POST['Qualifications'];
	$Organization = $_POST['Organization'];
	$Org_Email = $_POST['Org_Email'];
	$Org_Address = $_POST['Org_Address'];
    $service_period = $_POST['service_period'];
	$Proof = $_POST['Proof'];


	// update user data
	$result = mysqli_query($mysqli, "UPDATE partner SET Username='$Username',Email='$Email',Address='$Address',Contact='$Contact',Qualifications='$Qualifications',Organization='$Organization',Org_Email='$Org_Email',Org_Address='$Org_Address',service_period='$service_period',Proof='$Proof' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: partners-list.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM partner WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	
	$Username = $user_data['Username'];
	$Email = $user_data['Email'];
	$Address = $user_data['Address'];
    $Contact = $user_data['Contact'];
    $Qualifications = $user_data['Qualifications'];
	$Organization = $user_data['Organization'];
	$Org_Email = $user_data['Org_Email'];
	$Org_Address = $user_data['Org_Address'];
    $service_period = $user_data['service_period'];
	$Proof = $user_data['Proof'];
    
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
				<h3 class="mb-2">You Can Edit Partner</h3>
				<p></p>
			</div>
			<div class="aside-image" style="background-image:url(images/background/pic1.svg);"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				
					
					


					<div><a href="partners-list.php">Go to list of partners</a><br/><br/>

						<form name="update_user" method="post" action="edit_partner.php">
							<table border="0">
								<tr>
									<td>Partner Name</td>
									<td><input type="text" name="Username" value=<?php echo $Username;?>></td>
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
									<td>Qualifications</td>
									<td><input type="text" name="Qualifications" value=<?php echo $Qualifications;?>></td>
								</tr>
								<tr>
									<td>Organization Name</td>
									<td><input type="text" name="Organization" value=<?php echo $Organization;?>></td>
								</tr>
								<tr>
									<td>Organization Email</td>
									<td><input type="text" name="Org_Email" value=<?php echo $Org_Email;?>></td>
								</tr>
								<tr>
									<td>Organization Address</td>
									<td><input type="text" name="Org_Address" value=<?php echo $Org_Address;?>></td>
								</tr>
								<tr>
									<td>Service Period</td>
									<td><input type="text" name="service_period" value=<?php echo $service_period;?>></td>
								</tr>
								<tr>
									<td>Proof</td>
									<td><input type="text" name="Proof" value=<?php echo $Proof;?>></td>
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









