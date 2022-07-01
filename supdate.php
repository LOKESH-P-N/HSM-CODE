<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $SalID = $_GET['ID'];
        $SalEmpID = $_POST['sal_emp_id'];
        $SalType = $_POST['sal_type'];
        $SalAmt = $_POST['sal_amt'];
        $SalDesc = $_POST['sal_desc'];

        $query = " update salary set sal_id = '".$SalID."', sal_emp_id = '".$SalEmpID."', sal_type = '".$SalType."', sal_amt='".$SalAmt."', sal_desc='".$SalDesc."' where sal_id='".$SalID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:sview.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:sview.php");
    }


?>