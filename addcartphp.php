<?php

 include 'connection.php';  
    
    $pcode=$_POST['pcode'];
    $qty=$_POST['qty'];
    $date =date('Y-m-d');
    $uid=$_COOKIE['user_id'];
   
    $sql="select P_code from cart where user_id='$uid' and P_code='$pcode' ";
    $result=mysqli_query($con,$sql);
    if($row=mysqli_fetch_array($result))
    {
        $sql="update cart set quantity='$qty' where user_id='$uid' and P_code='$pcode'";
        $result=mysqli_query($con,$sql);
    }
    else
    {
    $sql="insert into cart (user_id,P_code,quantity,cdate) values('$uid','$pcode','$qty','$date')";
    $result=mysqli_query($con,$sql);
    }

    $sql1="select count(*) from cart where user_id='$uid'";
        $result1=mysqli_query($con,$sql1);
        $row1=mysqli_fetch_array($result1);
        setcookie('cartvalue',$row1[0]);
       // echo $fname;// Output: AMIT
    
    echo $row1[0];
?>