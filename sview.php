<?php 

    require_once("connection.php");
    $query = " select * from salary ";
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
                        <table class="table table-bordered" cellpadding="5" border="5" width="800">
                            <h1> Salary Details</h1>
                            <tr>
                                <td> Sal ID </td>
                                <td> Sal Emp ID </td>
                                <td> Sal Type </td>
                                <td> Sal Amt </td>
                                <td> Sal Desc </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                               
                            </tr>

                           <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $SalID = $row['sal_id'];
                                        $SalEmpID = $row['sal_emp_id'];
                                        $SalType = $row['sal_type'];
                                        $SalAmt = $row['sal_amt'];
                                        $SalDesc = $row['sal_desc'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $SalID ?></td>
                                        <td><?php echo $SalEmpID ?></td>
                                        <td><?php echo $SalType ?></td>
                                        <td><?php echo $SalAmt ?></td>
                                        <td><?php echo $SalDesc ?></td>
                                        <td><a href="sedit.php?GetID=<?php echo $SalID ?>">Edit</a></td>
                                        <td><a href="sdelete.php?Del=<?php echo $SalID ?>">Delete</a></td>
                                        
                                   
                                        
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