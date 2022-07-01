<?php 

    require_once("connection.php");
    $PerID = $_GET['GetID'];
    $query = " select * from permission where per_id='".$PerID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $PerID = $row['per_id'];
        $PerRoleID = $row['per_role_id'];
        $PerName = $row['per_name'];
        $PerModule = $row['per_module'];
        
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

                            <form action="pupdate.php?ID=<?php echo $PerID ?>" method="post">
                                <input type="number" class="form-control mb-2" placeholder=" Per ID " name="per_id" value="<?php echo $PerID ?>"> <br><br>
                                <input type="number" class="form-control mb-2" placeholder=" Per Role ID " name="per_role_id" value="<?php echo $PerRoleID ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Per Name " name="per_name" value="<?php echo $PerName ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Per Module " name="per_module" value="<?php echo $PerModule ?>"> <br><br>
                                
                                <button class="btn btn-primary" name="update">update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>