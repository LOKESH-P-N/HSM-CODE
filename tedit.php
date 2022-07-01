<?php 

    require_once("connection.php");
    $TrngID = $_GET['GetID'];
    $query = " select * from trainings where trng_id='".$TrngID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $TrngID = $row['trng_id'];
        $TrngDeptNo = $row['trng_dept_no'];
        $TrngType = $row['trng_type'];
        $TrngDesc = $row['trng_desc'];
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

                            <form action="tupdate.php?ID=<?php echo $TrngID ?>" method="post">
                                <input type="number" class="form-control mb-2" placeholder=" Trng ID " name="trng_id" value="<?php echo $TrngID ?>"> <br><br>
                                <input type="number" class="form-control mb-2" placeholder=" Trng Dept NO " name="trng_dept_no" value="<?php echo $TrngDeptNo ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Trng Type " name="trng_type" value="<?php echo $TrngType ?>"> <br><br>
                                <input type="text" class="form-control mb-2" placeholder=" Trng Desc " name="trng_desc" value="<?php echo $TrngDesc ?>"> <br><br>
                                
                                <button class="btn btn-primary" name="update">update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>