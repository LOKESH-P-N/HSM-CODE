
<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['per_id']) || empty($_POST['per_role_id']) || empty($_POST['per_name']) || empty($_POST['per_module']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $PerID = $_POST['per_id'];
            $PerRoleID = $_POST['per_role_id'];
            $PerName = $_POST['per_name'];
            $PerModule = $_POST['per_module'];
            

            $query = " insert into permission (per_id, per_role_id, per_name, per_module) values('$PerID','$PerRoleID','$PerName','$PerModule')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:pview.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:pindex.php");
    }



?>


