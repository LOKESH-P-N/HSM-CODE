<?php 

    require_once("connection.php");
    $SalID = $_GET['GetID'];
    $query = " select * from salary where sal_id='".$SalID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
         $SalID = $row['sal_id'];
         $SalEmpID = $row['sal_emp_id'];
         $SalType = $row['sal_type'];
         $SalAmt = $row['sal_amt'];
         $SalDesc = $row['sal_desc'];
                                        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="bg-image"></div>
    <div class="bg-text">
    <link rel="stylesheet" type="text/css" href="users.css">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="supdate.php?ID=<?php echo $SalID ?>" method="post">
                                <input type="number" class="form-control mb-2" placeholder=" Sal ID " name="sal_id" value="<?php echo $SalID ?>"> <br><br>
                                <input type="number" class="form-control mb-2" placeholder=" Sal Emp ID " name="sal_emp_id" value="<?php echo $SalEmpID ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Sal Type " name="sal_type" value="<?php echo $SalType ?>"> <br><br>
                                <input type="number" class="form-control mb-2" placeholder=" Sal Amt " name="sal_amt" value="<?php echo $SalAmt ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Sal Desc " name="sal_desc" value="<?php echo $SalDesc ?>"> <br><br>
                                <button class="btn btn-primary" name="update">update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>