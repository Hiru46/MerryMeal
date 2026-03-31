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
		
		// Taking all 4 values from the form data(input)
		$fullName = $_REQUEST['fullName'];
		$relation = $_REQUEST['relation'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO caregiver VALUES ('$id', '$fullName', '$relation', '$email', '$password')";
		
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
