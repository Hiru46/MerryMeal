<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MerryMeal - Restaurant  Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>
<div class="nav-header">
            <a href="index.php" class="brand-logo">
                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Cooking/Fork-spoon.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="46px" height="46px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="50" height="50"/>
						<path d="M15,3 L15.4502481,7.5024814 C15.4784917,7.78491722 15.7161555,8 16,8 C16.2838445,8 16.5215083,7.78491722 16.5497519,7.5024814 L17,3 L18,3 L18.4502481,7.5024814 C18.4784917,7.78491722 18.7161555,8 19,8 C19.2838445,8 19.5215083,7.78491722 19.5497519,7.5024814 L20,3 L21,3 L21,7.5 C21,9.43299662 19.4329966,11 17.5,11 C15.5670034,11 14,9.43299662 14,7.5 L14,3 L15,3 Z" fill="#AD0000"/>
						<path d="M17.5,13 L17.5,13 C18.0610373,13 18.5243493,13.4382868 18.55547,13.9984604 L18.916795,20.5023095 C18.9602658,21.2847837 18.3611851,21.9543445 17.5787108,21.9978153 C17.5524991,21.9992715 17.5262521,22 17.5,22 L17.5,22 C16.7163192,22 16.0810203,21.3647011 16.0810203,20.5810203 C16.0810203,20.5547682 16.0817488,20.5285212 16.083205,20.5023095 L16.44453,13.9984604 C16.4756507,13.4382868 16.9389627,13 17.5,13 Z" fill="#000000" />
						<path d="M7.5,14 L7.5,14 C8.06209761,14 8.5273156,14.4370496 8.56237829,14.9980526 L8.90643257,20.5029211 C8.95497952,21.2796724 8.3646533,21.9487088 7.58790204,21.9972557 C7.55863704,21.9990848 7.52932209,22 7.5,22 L7.5,22 C6.72173313,22 6.09082317,21.36909 6.09082317,20.5908232 C6.09082317,20.5615011 6.09173837,20.5321861 6.09356743,20.5029211 L6.43762171,14.9980526 C6.4726844,14.4370496 6.93790239,14 7.5,14 Z" fill="#000000" />
						<path d="M7.5,12 C5.56700338,12 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,3 7.5,3 C9.43299662,3 11,5.56700338 11,7.5 C11,9.43299662 9.43299662,12 7.5,12 Z M7.5095372,4.60103244 L7.56069005,9.94758244 C8.61891495,9.8578583 9.45855912,8.97981222 9.47749614,7.8949109 C9.49728809,6.76103086 8.63275447,4.70470991 7.5095372,4.60103244 Z" fill="#AD0000"/>
					</g>
				</svg><!--end::Svg Icon--></span>
				<div class="brand-title">MerryMeal</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		
		
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Meal Plan
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/team-3.jpg" width="20" alt=""/>
									<div class="header-info">
										<span class="fs-20 font-w500">Manodya Paramee</span>
										<small>Senior Chef-Hilton</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="../login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
			
<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "meals";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `crud_db`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "Menu : " .
				$row["id"]. " - Monday: " .
				$row["mondaymeal"]. " | Tuesday: " .
				$row["tuesdaymeal"]. " | Wednesday: " .
				$row["wednessdaymeal"]. " | Thursday: " .
				$row["thursdaymeal"]. " | Friday: " .
				$row["fridaymeal"]."<br>";
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>
<br>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "meals";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `crud_2`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "Menu : " .
				$row["id"]. " - Saturday: " .
				$row["saturdaymeal"]. " | Sunday: " .
				$row["sundaymeal"]."<br>";
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>

<hr>
<br><br>

					<div class="123"><a href="index.php"><br><br><br><b>Update meals list</b></a><br><br>

						<form action="add.php" method="post" name="form1">
							<table width="25%">
								<tr>
									<td>Monday: </td>
									<td><input type="text" name="mondaymeal"></td>
								</tr><br><br><br>
								<tr>
									<td>Tuesday: </td>
									<td><input type="text" name="tuesdaymeal"></td>
								</tr>            
								<tr>
									<td>Wednessday: </td>
									<td><input type="text" name="wednessdaymeal"></td>
								</tr> 
								<tr>
									<td>Thursday: </td>
									<td><input type="text" name="thursdaymeal"></td>
								</tr>
								<tr>
									<td>Friday: </td>
									<td><input type="text" name="fridaymeal"></td>
								</tr>
								<tr>
									<td>Saturday:</td>
									<td><input type="text" name="saturdaymeal"></td>
								</tr>
								<tr>
									<td>Sunday:</td>
									<td><input type="text" name="sundaymeal"></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="Submit" value="Add"></td>
								</tr>
								<tr>
							</table>
						</form>

						<?php

						// Check If form submitted, insert form data into users table.
						if(isset($_POST['Submit'])) {		

						
							$mondaymeal = $_POST['mondaymeal'];
							$tuesdaymeal = $_POST['tuesdaymeal'];
							$wednessdaymeal = $_POST['wednessdaymeal'];	
							$thursdaymeal = $_POST['thursdaymeal'];
							$fridaymeal = $_POST['fridaymeal'];
							$saturdaymeal = $_POST['saturdaymeal'];	
							$sundaymeal = $_POST['sundaymeal'];
							
							

							// include database connection file
							include_once("config.php");

							// Insert user data into table
							$result = mysqli_query($mysqli, "INSERT INTO p_meal(mondaymeal,tuesdaymeal,wednessdaymeal,thursdaymeal,fridaymeal,saturdaymeal,sundaymeal) VALUES('$mondaymeal','$tuesdaymeal','$wednessdaymeal','$thursdaymeal','$fridaymeal','$saturdaymeal','$sundaymeal')");

							// Show message when user added
							echo "Meal added successfully.<br> <a href='index.php'>Go Back</a>";
						}
						?>

						
                    </div>



							
							



			</div>
		</div>
	</div>


</body>
</html>




















