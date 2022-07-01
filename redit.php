<?php 

    require_once("connection.php");
    $RoleID = $_GET['GetID'];
    $query = " select * from roles where role_id='".$RoleID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $RoleID = $row['role_id'];
        $UserRoleID = $row['user_role_id'];
        $RoleName = $row['role_name'];
        $RoleDesc = $row['role_desc'];
        
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

                            <form action="rupdate.php?ID=<?php echo $RoleID ?>" method="post">
                                <input type="number" class="form-control mb-2" placeholder=" Role ID " name="role_id" value="<?php echo $RoleID ?>"> <br><br>
                                <input type="number" class="form-control mb-2" placeholder=" User Role ID " name="user_role_id" value="<?php echo $UserRoleID ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Role Name " name="role_name" value="<?php echo $RoleName ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Role Desc " name="role_desc" value="<?php echo $RoleDesc ?>"> <br><br>
                                
                                <button class="btn btn-primary" name="update">update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>