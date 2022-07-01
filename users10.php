<?php
	$user_id = $_POST['user_id'];
	$user_name = $_POST['user_name'];
	$user_mobile = $_POST['user_mobile'];
	$user_email = $_POST['user_email'];
	$user_address = $_POST['user_address'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(user_id, user_name, user_mobile, user_email, user_address) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("isiss", $user_id, $user_name, $user_mobile, $user_email, $user_address);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>