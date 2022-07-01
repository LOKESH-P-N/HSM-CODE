<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $DeptNO = $_GET['ID'];
        $DeptName = $_POST['dept_name'];
        $DeptPlace = $_POST['dept_place'];
        $DeptType = $_POST['dept_type'];
        $DeptDesc = $_POST['dept_desc'];

        $query = " update department set dept_no = '".$DeptNO."', dept_name = '".$DeptName."', dept_place = '".$DeptPlace."', dept_type='".$DeptType."', dept_desc='".$DeptDesc."' where dept_no='".$DeptNO."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:dview.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:dview.php");
    }


?>