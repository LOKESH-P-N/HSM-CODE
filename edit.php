<?php 

    require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = " select * from users where user_id='".$UserID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['user_id'];
        $UserName = $row['user_name'];
        $UserMobile = $row['user_mobile'];
        $UserEmail = $row['user_email'];
        $UserAddress = $row['user_address'];
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
      
        <form method="post" action="insert.php">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" User ID " name="user_id" value="<?php echo $UserID ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="user_name" value="<?php echo $UserName ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" User mobile " name="user_mobile" value="<?php echo $UserMobile ?>"><br><br>
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="user_email" value="<?php echo $UserEmail ?>"><br><br>
                                <input type="text" class="form-control mb-2" placeholder=" User Address " name="user_address" value="<?php echo $UserAddress ?>"><br><br>
                                <button class="btn btn-primary" name="update">update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>