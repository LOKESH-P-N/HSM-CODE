<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $DeptNO = $_GET['Del'];
            $query = " delete from department where dept_no = '".$DeptNO."'";
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