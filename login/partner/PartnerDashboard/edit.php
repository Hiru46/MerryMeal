<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];


	$mondaymeal = $_POST['mondaymeal'];
	$tuesdaymeal = $_POST['tuesdaymeal'];
	$wednessdaymeal = $_POST['wednessdaymeal'];
	$thursdaymeal = $_POST['thursdaymeal'];
	$fridaymeal = $_POST['fridaymeal'];
	$saturdaymeal = $_POST['saturdaymeal'];	
	$sundaymeal = $_POST['sundaymeal'];


	// update user data
	$result = mysqli_query($mysqli, "UPDATE p_meal SET mondaymeal='$mondaymeal',tuesdaymeal='$tuesdaymeal',wednessdaymeal='$wednessdaymeal',thursdaymeal='$thursdaymeal',fridaymeal='$fridaymeal',saturdaymeal='$saturdaymeal',sundaymeal='$sundaymeal' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM p_meal WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	


	$mondaymeal = $user_data['mondaymeal'];
	$tuesdaymeal = $user_data['tuesdaymeal'];
	$wednessdaymeal = $user_data['wednessdaymeal'];
	$thursdaymeal = $user_data['thursdaymeal'];
	$fridaymeal = $user_data['fridaymeal'];
	$saturdaymeal = $user_data['saturdaymeal'];	
	$sundaymeal = $user_data['sundaymeal'];
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MerryMeal - Dashboard </title>
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
					<img src="images/logo-full.png" alt="">
				</div>
				<h3 class="mb-2">Update Meals</h3>
				<p></p>
			</div>
			<div class="aside-image" style="background-image:url(images/background/pic1.svg);"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				
					
					


					<div><a href="index.php">Go to list of care givers</a><br/><br/>

						<form name="update_user" method="post" action="edit.php">
							<table border="0">
								<tr>
									<td>Monday Meal</td>
									<td><input type="text" name="mondaymeal" value=<?php echo $mondaymeal;?>></td>
								</tr>
								<tr>
									<td>Tuesday Meal</td>
									<td><input type="text" name="tuesdaymeal" value=<?php echo $tuesdaymeal;?>></td>
								</tr>			        
								<tr>
									<td>Wednessday Meal</td>
									<td><input type="text" name="wednessdaymeal" value=<?php echo $wednessdaymeal;?>></td>
								</tr>
								<tr>
									<td>Thursday Meal</td>
									<td><input type="text" name="thursdaymeal" value=<?php echo $thursdaymeal;?>></td>
								</tr>
								<tr>
									<td>Friday Meal</td>
									<td><input type="text" name="fridaymeal" value=<?php echo $fridaymeal;?>></td>
								</tr>
								<tr>
									<td>Saturday Meal</td>
									<td><input type="text" name="saturdaymeal" value=<?php echo $saturdaymeal;?>></td>
								</tr>
								<tr>
									<td>Sunday Meal</td>
									<td><input type="text" name="sundaymeal" value=<?php echo $sundaymeal;?>></td>
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





