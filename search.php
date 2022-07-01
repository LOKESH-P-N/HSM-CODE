<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"records");
?>







<?php 

        require_once("connection.php ");

    



if(isset($_POST["Sea"]))
{
    $res=mysqli_query($link,"select * from record where name='$_POST[user_name]'");
    echo "<table border=1>";
        echo "<tr>";
        echo "<th>"; echo "user_id";  echo "</th>";
        echo "<th>"; echo "user_name";  echo "</th>";
        echo "<th>"; echo "user_mobile";  echo "</th>";
        echo "<th>"; echo "user_email";  echo "</th>";
        echo "<th>"; echo "user_address";  echo "</th>";
        echo "</tr>";


    while ($row=mysqli_fetch_array($res))
     {
        echo "<tr>";
        echo "<td>"; echo $row["user_id"];  echo "</td>";
        echo "<td>"; echo $row["user_name"];  echo "</td>";
        echo "<td>"; echo $row["user_mobile"];  echo "</td>";
        echo "<td>"; echo $row["user_email"];  echo "</td>";
        echo "<td>"; echo $row["user_address"];  echo "</td>";
        echo "</tr>";

}


}

?>
