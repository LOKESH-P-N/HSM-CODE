<?php 

    require_once("connection.php");
    $DeptNO = $_GET['GetID'];
    $query = " select * from department where dept_no='".$DeptNO."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        
   
                                         $DeptNO = $row['dept_no'];
                                         $DeptName = $row['dept_name'];
                                         $DeptPlace = $row['dept_place'];
                                         $DeptType = $row['dept_type'];
                                         $DeptDesc = $row['dept_desc'];

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

                            <form action="dupdate.php?ID=<?php echo $DeptNO ?>" method="post">
                                <input type="number" class="form-control mb-2" placeholder=" Dept NO " name="dept_no" value="<?php echo $DeptNO ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Dept Name " name="dept_name" value="<?php echo $DeptName ?>"><br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Dept Place " name="dept_place" value="<?php echo $DeptPlace ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Dept Type " name="dept_type" value="<?php echo $DeptType ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Dept Desc " name="dept_desc" value="<?php echo $DeptDesc ?>"> <br><br>
                                <button class="btn btn-primary" name="update">update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>