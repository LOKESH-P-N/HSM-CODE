<?php
	$trng_id = $_POST['trng_id'];
	$trng_dept_no = $_POST['trng_dept_no'];
	$trng_type = $_POST['trng_type'];
	$trng_desc = $_POST['trng_desc'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into trainings(trng_id, trng_dept_no, trng_type, trng_desc) values(?, ?, ?, ?)");
		$stmt->bind_param("iiss", $trng_id, $trng_dept_no, $trng_type, $trng_desc);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>