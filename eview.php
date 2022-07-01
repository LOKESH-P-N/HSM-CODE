<?php 

    require_once("connection.php");
    $query = " select * from employee ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
    <!--<div class="bg-image"></div>
    <div class="bg-text">
    <link rel="stylesheet" type="text/css" href="users.css">-->
    <div class="bg-image"></div>
    <div class="bg-text">
    <link rel="stylesheet" type="text/css" href="upemployee.css">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <center>
                        <table class="table table-bordered" cellpadding="5" border="5" width="850">
                            <h1> Employee Details</h1>
                            <tr>
                                <td> Emp ID </td>
                                <td>  Name </td>
                                <td>  Mobile </td>
                                <td> User ID </td>
                                <td> Password </td>
                                <td> Address </td>
                                <td> Dept NO </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                               
                            </tr>

                           <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        

                                        $EmpID = $row['emp_id'];
                                        $Name = $row['name'];
                                        $Mobile = $row['mobile'];
                                        $UserID = $row['user_id'];
                                        $Password = $row['password'];
                                        $Address = $row['address'];
                                        $DeptNO = $row['dept_no'];
                            ?>
                                    <tr>
                                        <td><?php echo $EmpID ?></td>
                                        <td><?php echo $Name ?></td>
                                        <td><?php echo $Mobile ?></td>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $Password ?></td>
                                        <td><?php echo $Address ?></td>
                                        <td><?php echo $DeptNO ?></td>
                                        <td><a href="eedit.php?GetID=<?php echo $EmpID ?>">Edit</a></td>
                                        <td><a href="edelete.php?Del=<?php echo $EmpID ?>">Delete</a></td>
                                        

                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                   
                                   

                        </table>
                        </center>
                        <br><br>

                        <center> <form onhome=" return validate()" action="tablebuttons.html">
                                 <button>BACK</button> </form> <br><br>
                                 <form onhome=" return validate()" action="login10.html">
                                 <button>HOME</button> </form>
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
    
</body>
</html>