<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $RoleID = $_GET['ID'];
        $UserRoleID = $_POST['user_role_id'];
        $RoleName = $_POST['role_name'];
        $RoleDesc = $_POST['role_desc'];
        

        $query = " update roles set role_id = '".$RoleID."', user_role_id = '".$UserRoleID."', role_name = '".$RoleName."', role_desc='".$RoleDesc."'where role_id='".$RoleID."'";
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