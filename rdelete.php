<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $RoleID = $_GET['Del'];
            $query = " delete from roles where role_id = '".$RoleID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:rview.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:rview.php");
        }

?>