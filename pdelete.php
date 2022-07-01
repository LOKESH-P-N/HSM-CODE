<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $PerID = $_GET['Del'];
            $query = " delete from permission where per_id = '".$PerID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:pview.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:pview.php");
        }

?>