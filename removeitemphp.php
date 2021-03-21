<?php

include 'connection.php';

$pcode=$_POST['pcode'];
$username=$_COOKIE['user_id'];
//echo $pcode."removeitem";
$sql="delete from cart where P_code='$pcode' and user_id='$username' ";

$result=mysqli_query($con,$sql);

$sql1="select count(*) from cart where user_id='$username'";
        $result1=mysqli_query($con,$sql1);
        $row1=mysqli_fetch_array($result1);
        setcookie('cartvalue',$row1[0]);
       // echo $fname;// Output: AMIT

echo $row1[0];
?>