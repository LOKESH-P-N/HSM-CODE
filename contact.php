<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	
	

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact10(firstname, lastname) values(?, ?)");
		$stmt->bind_param("ss", $firstname, $lastname);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>