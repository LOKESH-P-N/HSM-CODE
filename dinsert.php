
<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['dept_no']) || empty($_POST['dept_name']) || empty($_POST['dept_place']) || empty($_POST['dept_type']) || empty($_POST['dept_desc']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $DeptNO = $_POST['dept_no'];
            $DeptName = $_POST['dept_name'];
            $DeptPlace = $_POST['dept_place'];
            $DeptType = $_POST['dept_type'];
            $DeptDesc = $_POST['dept_desc'];

            $query = " insert into department (dept_no, dept_name, dept_place, dept_type, dept_desc) values('$DeptNO','$DeptName','$DeptPlace','$DeptType','$DeptDesc')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:dview.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:dindex.php");
    }



?>


