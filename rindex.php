<!DOCTYPE html>
<html>
<head>
	<title>Roles Details</title>
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
    <link rel="stylesheet" type="text/css" href="roles10.css">
	    <form method="post" action="rinsert.php">
	
	<CENTER>
		<H3>ROLES DETAILS</H3><BR><BR><BR>
	<div class="container">

	 <label for="role_id"><b>ROLE_ID</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="number" name="role_id" required><br><br>

    <label for="user_role_id"><b>USER_ROLE_ID</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
    <input type="number"  name="user_role_id" required><br><br>

     <label for="role_name"><b>ROLE_NAME</b></label>&nbsp &nbsp &nbsp &nbsp
<input type="text"  name="role_name"  required><br><br>

     <label for="role_desc"><b>ROLE_DESC</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="text" name="role_desc" required><br><br>


    <button type="submit" class="btn" name="submit">submit</button></form></BR></BR>
   <form onhome=" return validate()">

    <button type="HOME" class="HOME">HOME</button><br><br></form>

   

  </div>
</div>
</CENTER>
</form>
</body>
</html>