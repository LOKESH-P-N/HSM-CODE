<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $EmpID = $_GET['Del'];
            $query = " delete from employee where emp_id = '".$EmpID."'";
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