<!DOCTYPE html>
<html>
<head>
	<title>Permissions Details</title>
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
    <link rel="stylesheet" type="text/css" href="permissions10.css">
	    <form method="post" action="pinsert.php">
	
	<CENTER>
		<H3>PERMISSIONS DETAILS</H3><BR><BR><BR>
	<div class="container">

	 <label for="per_id"><b>PER_ID</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="number" name="per_id" required><br><br>

    <label for="per_role_id"><b>PER_ROLE_ID</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
    <input type="number"  name="per_role_id" required><br><br>

     <label for="per_name"><b>PER_NAME</b></label>&nbsp &nbsp &nbsp &nbsp
<input type="text"  name="per_name"  required><br><br>

     <label for="per_module"><b>PER_MODULE</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="text" name="per_module" required><br><br>


    <button type="submit" class="btn" name="submit">submit</button></form></BR></BR>
   <form onhome=" return validate()">

    <button type="HOME" class="HOME">HOME</button><br><br></form>

   

  </div>
</div>
</CENTER>
</form>
</body>
</html>