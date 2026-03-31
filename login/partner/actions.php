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
		$Username = $_REQUEST['Username'];
		$Email = $_REQUEST['Email'];
		$Address = $_REQUEST['Address'];
		$Contact = $_REQUEST['Contact'];
		$Qualifications = $_REQUEST['Qualifications'];
        $Organization = $_REQUEST['Organization'];
        $Org_Email = $_REQUEST['Org_Email'];
        $Org_Address = $_REQUEST['Org_Address'];
        $service_period = $_REQUEST['service_period'];
        $Proof = $_REQUEST['Proof'];
        $Passowrd = $_REQUEST['Password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO partner VALUES ('$id','$Username','$Email','$Address','$Contact','$Qualifications','$Organization','$Org_Email','$Org_Address','$service_period','$Proof','$Password')";

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
