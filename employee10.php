<?php
	$emp_id = $_POST['emp_id'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$user_id = $_POST['user_id'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$dept_no = $_POST['dept_no'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into employee(emp_id, name, mobile, user_id, password, address, dept_no) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isiissi", $emp_id, $name, $mobile, $user_id, $password, $address, $dept_no);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>