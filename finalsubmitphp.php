<?php
 include 'connection.php';
    $uid=$_COOKIE['user_id'];
    $pcode=$_POST['pcode'];
    $trid=$_POST['trid'];
    $date= date('Y-m-d');
    if($pcode=="cart")
    {
        //echo "cart 1";
        $sqlc="select P_code,quantity from cart where user_id='$uid' ";
        $resultc=mysqli_query($con,$sqlc);
        
        while($rowc=mysqli_fetch_array($resultc))
        {
            $sqlb="select P_name, P_price, off,P_current_stock, P_language from bookshop_master where P_code='$rowc[0]'";
            $resultb=mysqli_query($con,$sqlb);
            $rowb=mysqli_fetch_array($resultb);

    $price= number_format($rowb[1])-(number_format($rowb[1])* number_format($rowb[2])/100);
//insert orderdetails table
    $sqlo="insert into orderdetails (P_code, P_name, qty, paymentrefno, user_id, productamt, odate, status) values('$rowc[0]','$rowb[0]','$rowc[1]','$trid','$uid','$price','$date','Not Deliver')";
    $resulto=mysqli_query($con,$sqlo);


//update stock;
 $nstock=number_format($rowb[3])- number_format($rowc[1]);

  $sql="insert into stock_mst (P_code,P_name,P_language,P_current_stock,P_stock_out,P_stock_out_date) values('$rowc[0]','$rowb[0]','$rowb[4]','$nstock','$rowc[1]','$date')";
  $result= mysqli_query($con,$sql) or die("problem");

    $sql="update bookshop_master set P_current_stock='$nstock' where P_code='$rowc[0]'";
    $result=mysqli_query($con,$sql) or die("uproblem");

    //delete from cart
        $sqld="delete from cart where user_id='$uid'";
        $resultd=mysqli_query($con,$sqld);

        }//end of while loop
        echo "Order Accepted Successfully....\nYour Item will Delivered in 5 To 7 days";
    }
    else{
        $qty=$_POST['qty'];
        //echo $pcode."  ".$qty;
        
        $sqlb="select P_name, P_price, off,P_current_stock, P_language from bookshop_master where P_code='$pcode'";
        $resultb=mysqli_query($con,$sqlb);
        $rowb=mysqli_fetch_array($resultb);

        $price= number_format($rowb[1])-(number_format($rowb[1])* number_format($rowb[2])/100);

        $nstock=number_format($rowb[3])- number_format($qty);

        $sqlo="insert into orderdetails (P_code, P_name, qty, paymentrefno, user_id, productamt, odate, status) values('$pcode','$rowb[0]','$qty','$trid','$uid','$price','$date','Not Deliver')";
    $resulto=mysqli_query($con,$sqlo);


  $sql="insert into stock_mst (P_code,P_name,P_language,P_current_stock,P_stock_out,P_stock_out_date) values('$pcode','$rowb[0]','$rowb[4]','$nstock','$qty','$date')";
  $result= mysqli_query($con,$sql) or die("problem");

  $sql="update bookshop_master set P_current_stock='$nstock' where P_code='$pcode'";
    $result=mysqli_query($con,$sql) or die("uproblem");

    echo "Order Accepted Successfully....\nYour Item will Delivered in 5 To 7 days";
    }
    mysqli_close($con);
?>