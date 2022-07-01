<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $SalID = $_GET['Del'];
            $query = " delete from salary where sal_id = '".$SalID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:sview.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:sview.php");
        }

?>