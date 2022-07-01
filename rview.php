<?php 

    require_once("connection.php");
    $query = " select * from roles ";
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
  
    <div class="bg-image"></div>
    <div class="bg-text">
    <link rel="stylesheet" type="text/css" href="upusers.css">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <center>
                        <table class="table table-bordered" cellpadding="5" border="5">
                            <h1> Role Details</h1>
                            <tr>
                                <td> Role ID </td>
                                <td> User Role ID </td>
                                <td> Role Name </td>
                                <td> Role Desc </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                               
                            </tr>

                           <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $RoleID = $row['role_id'];
                                        $UserRoleID = $row['user_role_id'];
                                        $RoleName = $row['role_name'];
                                        $RoleDesc = $row['role_desc'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $RoleID ?></td>
                                        <td><?php echo $UserRoleID ?></td>
                                        <td><?php echo $RoleName ?></td>
                                        <td><?php echo $RoleDesc ?></td>
                                        <td><a href="redit.php?GetID=<?php echo $RoleID ?>">Edit</a></td>
                                        <td><a href="rdelete.php?Del=<?php echo $RoleID ?>">Delete</a></td>
                                        
                                         


                                    

                                        
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