
<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['sal_id']) || empty($_POST['sal_emp_id']) || empty($_POST['sal_type']) || empty($_POST['sal_amt']) || empty($_POST['sal_desc']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $SalID = $_POST['sal_id'];
            $SalEmpID = $_POST['sal_emp_id'];
            $SalType = $_POST['sal_type'];
            $SalAmt = $_POST['sal_amt'];
            $SalDesc = $_POST['sal_desc'];

            $query = " insert into salary (sal_id, sal_emp_id, sal_type, sal_amt, sal_desc) values('$SalID','$SalEmpID','$SalType','$SalAmt','$SalDesc')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:sview.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:sindex.php");
    }



?>


