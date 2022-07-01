<?php 

    require_once("connection.php");
    $EmpID = $_GET['GetID'];
    $query = " select * from employee where emp_id='".$EmpID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        
   
                                        $EmpID = $row['emp_id'];
                                        $Name = $row['name'];
                                        $Mobile = $row['mobile'];
                                        $UserID = $row['user_id'];
                                        $Password = $row['password'];
                                        $Address = $row['address'];
                                        $DeptNO = $row['dept_no'];

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

                            <form action="eupdate.php?ID=<?php echo $EmpID ?>" method="post">
                                <input type="number" class="form-control mb-2" placeholder=" Emp ID " name="emp_id" value="<?php echo $EmpID ?>"><br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Name " name="name" value="<?php echo $Name ?>"><br><br>
                                <input type="tel" class="form-control mb-2" placeholder=" Mobile " name="mobile" value="<?php echo $Mobile ?>"><br><br>
                                <input type="number" class="form-control mb-2" placeholder=" User ID " name="user_id" value="<?php echo $UserID ?>"><br><br>
                                <input type="password" class="form-control mb-2" placeholder=" Password " name="password" value="<?php echo $Password ?>"><br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Address " name="address" value="<?php echo $Address ?>"><br><br>
                                <input type="number" class="form-control mb-2" placeholder=" Dept NO " name="dept_no" value="<?php echo $DeptNO ?>"><br><br>
                                <button class="btn btn-primary" name="update">update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>