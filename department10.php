<?php
	$dept_no = $_POST['dept_no'];
	$dept_name = $_POST['dept_name'];
	$dept_place = $_POST['dept_place'];
	$dept_type = $_POST['dept_type'];
	$dept_desc = $_POST['dept_desc'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into department(dept_no, dept_name, dept_place, dept_type, dept_desc) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("issss", $dept_no, $dept_name, $dept_place, $dept_type, $dept_desc);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>