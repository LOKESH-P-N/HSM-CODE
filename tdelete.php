<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $TrngID = $_GET['Del'];
            $query = " delete from trainings where trng_id = '".$TrngID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:tview.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:tview.php");
        }

?>