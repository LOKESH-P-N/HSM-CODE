<!DOCTYPE html>
<html>
<head>
	<title>Department Details</title>
	<title>FORM</title>
	<script>
    function validate(){
      var username=document.getElementById("uname");
      var Password=document.getElementById("pass");
  </script>
</head>

  <body><div class="bg-image"></div>
    <div class="bg-text">
    <link rel="stylesheet" type="text/css" href="department10.css">
           
    
	    <form method="post" action="dinsert.php">	
<CENTER><br><br>
		<H3>DEPARTMENT DETAILS</H3><BR><BR><BR><br><br><br>

	<div class="container">

	 <label for="dept_no"><b>DEPT_NO</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 
    <input type="number" name="dept_no" required><br><br>

    <label for="dept_name"><b>DEPT_NAME</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
    <input type="text"  name="dept_name" required><br><br>

     <label for="dept_place"><b>DEPT_PLACE</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp 
       <input type="text"  name="dept_place" required><br><br>


     <label for="dept_type"><b>DEPT_TYPE</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp 
    <input type="text" name="dept_type" required><br><br>

     <label for="dept_desc"><b>DEPT_DESC</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
    <input type="text"  name="dept_desc" required><br><br>

    <br><br><br>  
    <button type="submit" class="btn" name="submit">submit</button></form></BR></BR>
   


    <button type="HOME" class="HOME">HOME</button><br><br></form>

</div>
</div>
</CENTER>
</form>
</body>
</html>