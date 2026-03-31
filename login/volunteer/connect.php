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
		$fullName = $_REQUEST['fullName'];
        $address = $_REQUEST['address'];
        $gender = $_REQUEST['gender'];
        $email = $_REQUEST['email'];		
		$password = $_REQUEST['password'];
		
		
		
		// Performing insert query execution
		// here our table name is volunteeer
		$sql = "INSERT INTO volunteer VALUES ('$id','$fullName','$address','$gender','$email','$password')";

		
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