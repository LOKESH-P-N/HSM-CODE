s<?php 

    require_once("connection.php");
    $query = " select * from users ";
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
    <link rel="stylesheet" type="text/css" href="upusers.css">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <center>
                        <table class="table table-bordered" cellpadding="5" border="5" width="850">
                            <h1> Users Details</h1>
                            <tr>
                                <td> USER_ID</td>
                                <td> USER_NAME </td>
                                <td> USER_MOBILE </td>
                                <td>USER_EMAIL </td>
                                <td> USER_ADDRES </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                               
                            </tr>

                           <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['user_id'];
                                        $UserName = $row['user_name'];
                                        $UserMobile = $row['user_mobile'];
                                        $UserEmail = $row['user_email'];
                                        $UserAddress = $row['user_address'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserMobile ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserAddress ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                        
                                         


                                    

                                        
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
                        </center>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
</body>
</html>