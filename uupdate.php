<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['user_name'];
        $UserMobile = $_POST['user_mobile'];
        $UserEmail = $_POST['user_email'];
        $UserAddress = $_POST['user_address'];

        $query = " update users set user_id = '".$UserID."', user_name = '".$UserName."', user_mobile = '".$UserMobile."', user_email='".$UserEmail."', user_address='".$UserAddress."' where user_id='".$UserID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>