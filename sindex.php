<!DOCTYPE html>
<html>
<head>
	<title>Salary Details</title>
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
    <link rel="stylesheet" type="text/css" href="salary10.css">
	    <form method="post" action="sinsert.php">
	
	<CENTER>
		<H3>SALARY DETAILS</H3><BR><BR><BR>
	<div class="container">

	 <label for="sal_id"><b>SAL_ID</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="number" name="sal_id" required><br><br>

    <label for="sal_emp_id"><b>SAL_EMP_ID</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
    <input type="number"  name="sal_emp_id" required><br><br>

     <label for="sal_type"><b>SAL_TYPE</b></label>&nbsp &nbsp &nbsp &nbsp
<input type="text"  name="sal_type"  required><br><br>

 <label for="sal_amt"><b>SAL_AMT</b></label>&nbsp &nbsp &nbsp &nbsp
<input type="number"  name="sal_amt"  required><br><br>

     <label for="sal_desc"><b>SAL_DESC</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="text" name="sal_desc" required><br><br>


    <button type="submit" class="btn" name="submit">submit</button></form></BR></BR>
   <form onhome=" return validate()">

    <button type="HOME" class="HOME">HOME</button><br><br></form>

   

  </div>
   </div>
</CENTER>
</form>
</body>
</html>