<!DOCTYPE html>
<html>
<head>
  <title>Employee Details</title>
  <title>FORM</title>
  <script>
    function validate(){
      var username=document.getElementById("uname");
      var Password=document.getElementById("pass");
  </script>
</head>
<body>
    <div class="bg-image"></div>
    <div class="bg-text">
    <link rel="stylesheet" type="text/css" href="employee10.css">
      <form method="post" action="einsert.php">
  
  <CENTER>
    <H3>EMPLOYEE DETAILS</H3><BR><BR><BR>
  <div class="container">

   <label for="emp_id"><b>EMP_ID</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="number" name="emp_id" required><br><br>

    <label for="name"><b>NAME</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
    <input type="text"  name="name" required><br><br>

     <label for="mobile"><b>MOBILE</b></label>&nbsp &nbsp &nbsp &nbsp
<input type="tel"  name="mobile" pattern="[0-9]{10}" placeholder="phone number"required><br><br>

     <label for="user_id"><b>USER_ID</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="number" placeholder="USER ID" name="user_id" required><br><br>

    <label for="password"><b>PASSWORD</b></label>&nbsp &nbsp 
    <input type="password" placeholder="Enter Password" name="password" required><br><br>

     <label for=" address"><b>ADDRESS</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="text"  name="address" required><br><br>

    <label for="dept_no"><b>DEPT_NO</b></label>&nbsp &nbsp &nbsp &nbsp
    <input type="number"  name="dept_no" required><br><br><BR><BR>


    <button type="submit" class="btn" name="submit">SUBMIT</button></form></BR></BR>
   

    <button type="HOME" class="HOME">HOME</button><br><br></form>

   

  </div>
</div>
</CENTER>
</form>
</body>
</html>