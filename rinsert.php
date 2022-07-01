
<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['role_id']) || empty($_POST['user_role_id']) || empty($_POST['role_name']) || empty($_POST['role_desc']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $RoleID = $_POST['role_id'];
            $UserRoleID = $_POST['user_role_id'];
            $RoleName = $_POST['role_name'];
            $RoleDesc = $_POST['role_desc'];
           

            $query = " insert into roles (role_id, user_role_id, role_name, role_desc) values('$RoleID','$UserRoleID','$RoleName','$RoleDesc')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:rview.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:rindex.php");
    }



?>


