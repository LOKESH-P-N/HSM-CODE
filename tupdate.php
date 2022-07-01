<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $TrngID = $_GET['ID'];
        $TrngDeptNO = $_POST['trng_dept_no'];
        $TrngType = $_POST['trng_type'];
        $TrngDesc = $_POST['trng_desc'];
        
        $query = " update trainings set trng_id = '".$TrngID."', trng_dept_no = '".$TrngDeptNO."', trng_type = '".$TrngType."', trng_desc='".$TrngDesc."' where trng_id='".$TrngID."'";
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