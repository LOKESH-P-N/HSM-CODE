
<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['user_id']) || empty($_POST['user_name']) || empty($_POST['user_mobile']) || empty($_POST['user_email']) || empty($_POST['user_address']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $UserID = $_POST['user_id'];
            $UserName = $_POST['user_name'];
            $UserMobile = $_POST['user_mobile'];
            $UserEmail = $_POST['user_email'];
            $UserAddress = $_POST['user_address'];

            $query = " insert into users (user_id, user_name, user_mobile, user_email, user_address) values('$UserID','$UserName','$UserMobile','$UserEmail','$UserAddress')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>


