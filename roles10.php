<?php
	$role_id = $_POST['role_id'];
	$user_role_id = $_POST['user_role_id'];
	$role_name = $_POST['role_name'];
	$role_desc = $_POST['role_desc'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into roles(role_id, user_role_id, role_name, role_desc) values(?, ?, ?, ?)");
		$stmt->bind_param("iiss", $role_id, $user_role_id, $role_name, $role_desc);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>