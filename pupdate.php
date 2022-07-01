<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $PerID = $_GET['ID'];
        $PerRoleID = $_POST['per_role_id'];
        $PerName = $_POST['per_name'];
        $PerModule = $_POST['per_module'];
        

        $query = " update permission set per_id = '".$PerID."', per_role_id = '".$PerRoleID."', per_name = '".$PerName."', per_module='".$PerModule."' where per_id='".$PerID."'";
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