<!DOCTYPE html>
<html>
<head>
	<title>Users Details</title>
	<title>FORM</title>
	<script>
    function validate(){
      var username=document.getElementById("uname");
      var email=document.getElementById("email");
  </script>
</head>
<body>
   <div class="bg-image"></div>
    <div class="bg-text">
    <link rel="stylesheet" type="text/css" href="users.css">
      
	    <form method="post" action="insert.php">
	
	<CENTER>
		<H3>USERS DETAILS</H3><BR><BR><BR>
	<div class="container">

	 <label for="user_id"><b>USER_ID</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="number" name="user_id" required><br><br>

    <label for="user_name"><b>USER_NAME</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
    <input type="text"  name="user_name" required><br><br>

     <label for="user_mobile"><b>USER_MOBILE</b></label>&nbsp &nbsp &nbsp &nbsp
<input type="tel"  name="user_mobile" pattern="[0-9]{10}" required><br><br>

     <label for="user_email"><b>USER_EMAIL</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="text" name="user_email" required><br><br>


     <label for="user_address"><b>USER_ADDRESS</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="text"  name="user_address" required><br><br>


    <button type="submit" class="btn" name="submit">SUBMIT</button></form></BR></BR>
   <form onhome=" return validate()">

    <button type="HOME" class="HOME">HOME</button><br><br></form>

   

  </div>
</div>
</CENTER>
</form>
</body>
</html>