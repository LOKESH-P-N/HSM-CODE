<?php 

    require_once("connection.php");
    $query = " select * from department ";
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
    <link rel="stylesheet" type="text/css" href="updepartment.css">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <center>
                        <table class="table table-bordered" cellpadding="5" border="5" width="850">
                            <h1> Department Details</h1>
                            <tr>
                                <td> Dept NO </td>
                                <td> Dept Name </td>
                                <td> Dept Place </td>
                                <td> Dept Type </td>
                                <td> Dept Desc </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                               
                            </tr>

                           <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                         $DeptNO = $row['dept_no'];
                                         $DeptName = $row['dept_name'];
                                         $DeptPlace = $row['dept_place'];
                                         $DeptType = $row['dept_type'];
                                         $DeptDesc = $row['dept_desc'];
                            ?>
                                    <tr>
                                        <td><?php echo $DeptNO ?></td>
                                        <td><?php echo $DeptName ?></td>
                                        <td><?php echo $DeptPlace ?></td>
                                        <td><?php echo $DeptType ?></td>
                                        <td><?php echo $DeptDesc ?></td>
                                        <td><a href="dedit.php?GetID=<?php echo $DeptNO ?>">Edit</a></td>
                                        <td><a href="ddelete.php?Del=<?php echo $DeptNO ?>">Delete</a></td>


                                        
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