<?php
$uname="admin";
$psw="admin";

session_start();

if(isset($_SESSION['uname'])){
	echo "<h1> welcome".$_SESSION['uname']."</h1>";
	echo "<br> <a href='tablebuttons.html'> <input type=button value=table name=table> </a><br><br>";
	echo "<br> <a href='logout.php'> <input type=button value=logout name=logout> </a>";
}

else{
	if($_POST['uname']==$uname && $_POST['psw']==$psw){
		$_SESSION['uname']=$uname;
		echo "<script>location.href='welcome.php'</script>";
	}

	else{
		echo "<script>alert('username or password incorrect!')</script>";

		echo "<script>location.href='login10.html'</script>";
	}
}