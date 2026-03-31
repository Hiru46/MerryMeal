<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];


	$fullName = $_POST['fullName'];
	$address = $_POST['address'];
	$Nic = $_POST['Nic'];
	$idProof = $_POST['idProof'];
	$why = $_POST['why'];
	$issueProof = $_POST['issueProof'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	// update user data
	$result = mysqli_query($mysqli, "UPDATE member SET fullName='$fullName',address='$address',Nic='$Nic',idProof='$idProof',why='$why',issueProof='$issueProof',email='$email',password='$password' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: members-list.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM member WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	
	
	$fullName = $user_data['fullName'];
	$address = $user_data['address'];
	$Nic = $user_data['Nic'];
	$idProof = $user_data['idProof'];
	$why = $user_data['why'];
	$issueProof = $user_data['issueProof'];
	$email = $user_data['email'];
	$password = $user_data['password'];
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
				<h3 class="mb-2">You Can Edit Member</h3>
				<p></p>
			</div>
			<div class="aside-image" style="background-image:url(images/background/pic1.svg);"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				
					
					


					<div><a href="members-list.php">Go to list of members</a><br/><br/>

						<form name="update_user" method="post" action="edit_member.php">
							<table border="0">
								<tr>
									<td>Member Name</td>
									<td><input type="text" name="fullName" value=<?php echo $fullName;?>></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><input type="text" name="address" value=<?php echo $address;?>></td>
								</tr>
								<tr>
									<td>ID</td>
									<td><input type="text" name="Nic" value=<?php echo $Nic;?>></td>
								</tr>
								<tr>
									<td>ID proof</td>
									<td><input type="text" name="idProof" value=<?php echo $idProof;?>></td>
								</tr>
								<tr>
									<td>Why</td>
									<td><input type="text" name="why" value=<?php echo $why;?>></td>
								</tr>
								<tr>
									<td>Issue proof</td>
									<td><input type="text" name="issueProof" value=<?php echo $issueProof;?>></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="text" name="email" value=<?php echo $email;?>></td>
								</tr>						
								<tr>
									<td>Password</td>
									<td><input type="text" name="password" value=<?php echo $password;?>></td>
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





