<?php 

    require_once("connection.php");
    $query = " select * from trainings ";
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
    <link rel="stylesheet" type="text/css" href="uptrainings.css">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <center>
                        <table class="table table-bordered" cellpadding="5" border="5" width="800">
                            <h1> Training Details</h1>
                            <tr>
                                <td> Trng ID </td>
                                <td> Trng Dept No </td>
                                <td> Trng Type </td>
                                <td> Trng Desc </td>
                                
                                <td> Edit  </td>
                                <td> Delete </td>
                               
                            </tr>

                           <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $TrngID = $row['trng_id'];
                                        $TrngDeptNO = $row['trng_dept_no'];
                                        $TrngType = $row['trng_type'];
                                        $TrngDesc = $row['trng_desc'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $TrngID ?></td>
                                        <td><?php echo $TrngDeptNO ?></td>
                                        <td><?php echo $TrngType ?></td>
                                        <td><?php echo $TrngDesc ?></td>
                                        
                                        <td><a href="tedit.php?GetID=<?php echo $TrngID ?>">Edit</a></td>
                                        <td><a href="tdelete.php?Del=<?php echo $TrngID ?>">Delete</a></td> 

                                        
                                       
                                        
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