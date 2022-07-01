<?php 

    require_once("connection.php");
    $query = " select * from permission ";
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
    <link rel="stylesheet" type="text/css" href="uppermissions.css">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <center>
                        <table class="table table-bordered" cellpadding="5" border="5" width="850">
                            <h1> Permissions Details</h1>
                            <tr>
                                <td> Per ID </td>
                                <td> Per Role ID </td>
                                <td> Per Name </td>
                                <td> Per Module </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                               
                            </tr>

                           <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $PerID = $row['per_id'];
                                        $PerRoleID = $row['per_role_id'];
                                        $PerName = $row['per_name'];
                                        $PerModule = $row['per_module'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $PerID ?></td>
                                        <td><?php echo $PerRoleID ?></td>
                                        <td><?php echo $PerName ?></td>
                                        <td><?php echo $PerModule ?></td>
                                        
                                        <td><a href="pedit.php?GetID=<?php echo $PerID ?>">Edit</a></td>
                                        <td><a href="pdelete.php?Del=<?php echo $PerID ?>">Delete</a></td>
                                        
                                         

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