<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $EmpID = $_GET['ID'];
        $Name = $_POST['name'];
        $Mobile = $_POST['mobile'];
        $UserID = $_POST['user_id'];
        $Password = $_POST['password'];
        $Address = $_POST['address'];
        $DeptNO = $_POST['dept_no'];

        $query = " update employee set emp_id = '".$EmpID."', name = '".$Name."', mobile = '".$Mobile."', user_id='".$UserID."', password = '".$Password."', address='".$Address."', dept_no = '".$DeptNO."'  where emp_id='".$EmpID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:eview.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:eview.php");
    }


?>