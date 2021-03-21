<?php
 include 'connection.php';
$aid=$_POST['adminid'];
$pass=$_POST['pass'];

$sql="select * from admininfo where admin_id='$aid' and password='$pass'";
$result=mysqli_query($con,$sql);

if($row=mysqli_fetch_array($result))
{
    echo '0';
    setcookie("admin_name",$row[2]);
}
else
{
    echo '1';
}
//echo $aid;
?>