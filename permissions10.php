<?php
	$per_id = $_POST['per_id'];
	$per_role_id = $_POST['per_role_id'];
	$per_name = $_POST['per_name'];
	$per_module = $_POST['per_module'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into permission(per_id, per_role_id, per_name, per_module) values(?, ?, ?, ?)");
		$stmt->bind_param("iiss", $per_id, $per_role_id, $per_name, $per_module);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>