<!DOCTYPE html>
<html>
<head>
	<title>Trainings Details</title>
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
    <link rel="stylesheet" type="text/css" href="trainings10.css">
	    <form method="post" action="tinsert.php">
	
	<CENTER>
		<H3>TRAININGS DETAILS</H3><BR><BR><BR>
	<div class="container">

	 <label for="trng_id"><b>TRNG_ID</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="number" name="trng_id" required><br><br>

    <label for="trng_dept_no"><b>TRNG_DEPT_NO</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
    <input type="number"  name="trng_dept_no" required><br><br>

     <label for="trng_type"><b>TRNG_TYPE</b></label>&nbsp &nbsp &nbsp &nbsp
<input type="text"  name="trng_type"  required><br><br>

     <label for="trng_desc"><b>TRNG_DESC</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="text" name="trng_desc" required><br><br>


    <button type="submit" class="btn" name="submit">submit</button></form></BR></BR>
   <form onhome=" return validate()">

    <button type="HOME" class="HOME">HOME</button><br><br></form>

   

  </div>
</div>
</CENTER>
</form>
</body>
</html>