
<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['emp_id']) || empty($_POST['name']) || empty($_POST['mobile']) || empty($_POST['user_id']) || empty($_POST['password']) || empty($_POST['address']) || empty($_POST['dept_no']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $EmpID = $_POST['emp_id'];
            $Name = $_POST['name'];
            $Mobile = $_POST['mobile'];
            $UserID = $_POST['user_id'];
            $Password = $_POST['password'];
            $Address = $_POST['address'];
            $DeptNO = $_POST['dept_no'];

            $query = " insert into employee (emp_id, name, mobile, user_id, password, address, dept_no) values('$EmpID','$Name','$Mobile','$UserID','$Password','$Address','$DeptNO')";
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
    }
    else
    {
        header("location:eindex.php");
    }



?>


