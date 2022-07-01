<?php
	$sal_id = $_POST['sal_id'];
	$sal_emp_id = $_POST['sal_emp_id'];
	$sal_type = $_POST['sal_type'];
	$sal_amt = $_POST['sal_amt'];
	$sal_desc = $_POST['sal_desc'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into salary(sal_id, sal_emp_id, sal_type, sal_amt, sal_desc) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("iisis", $sal_id, $sal_emp_id, $sal_type, $sal_amt, $sal_desc);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>