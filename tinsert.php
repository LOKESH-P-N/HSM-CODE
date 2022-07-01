
<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['trng_id']) || empty($_POST['trng_dept_no']) || empty($_POST['trng_type']) || empty($_POST['trng_desc']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $TrngID = $_POST['trng_id'];
            $TrngDeptNo = $_POST['trng_dept_no'];
            $TrngType = $_POST['trng_type'];
            $TrngDesc = $_POST['trng_desc'];
            

            $query = " insert into trainings (trng_id, trng_dept_no, trng_type, trng_desc) values('$TrngID','$TrngDeptNo','$TrngType','$TrngDesc')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:tview.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:tindex.php");
    }



?>


