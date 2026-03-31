<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "meals");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Fullname = $_REQUEST['Fullname'];
		$Email = $_REQUEST['Email'];
		$Address = $_REQUEST['Address'];
		$Contact = $_REQUEST['Contact'];
		$Age = $_REQUEST['Age'];
        $NIC = $_REQUEST['NIC'];
        $Driverable_Vehicles = $_REQUEST['Driverable_Vehicles'];
        $License = $_REQUEST['License'];
        $Certificate = $_REQUEST['Certificate'];
        
        $Passowrd = $_REQUEST['Password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO rider VALUES ('$id','$Fullname','$Email','$Address','$Contact','$Age','$NIC','$Driverable_Vehicles','$License','$Certificate','$Password')";

		if(mysqli_query($conn, $sql)){
			echo $_SESSION['Email'] = $Email;
			header("location:thank.html");
		} else{
			echo "ERROR: Hush! Sorry, Invalid Login Credentials. $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

</body>

</html>
