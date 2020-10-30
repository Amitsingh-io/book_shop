<?php

$servername="localhost";
$username="root";
$pass="";
$con=mysqli_Connect($servername,$username,$pass)or die("There is some problem in mysql connection");
$db="book_shop";
$sdb=mysqli_select_db($con,$db) or die("Problem in database connection");




$check=$_POST['val'];
// if $check= 1 then search with product code

//if $check=2 then fetch language according to product name;

$sql='';
if($check=='1')
{
    $pcode=$_POST['pcode'];
    $sql="select P_name,P_language,P_current_stock from bookshop_master where P_code='$pcode'";
    $result= mysqli_query($con,$sql) or die("problem");
    if($row=mysqli_fetch_array($result))
    {
        echo json_encode($row);
        
    }
    else
    {
        echo json_encode("1");
    }

}
else if($check=='2')
{
    $pname=$_POST['pname'];
    $sql="select P_code,P_language,P_current_stock from bookshop_master where P_name='$pname'";
    $result= mysqli_query($con,$sql) or die("problem");
    if($row=mysqli_fetch_array($result))
    {
        echo json_encode($row);
    }
    else
    {
        echo json_encode("1");
    }
}
else if($check=='3')
{
    $pcode=$_POST['pcode'];
    $pname=$_POST['pname'];
    $lang=$_POST['lang'];
    $istock=$_POST['istock'];
    $nstock=$_POST['nstock'];
    
  $date= date('Y-m-d');
    
  $sql="insert into stock_mst (P_code,P_name,P_language,P_current_stock,P_stock_in,P_stock_in_date) values('$pcode','$pname','$lang','$nstock','$istock','$date')";
  $result= mysqli_query($con,$sql) or die("problem");

    $sql="update bookshop_master set P_current_stock='$nstock' where P_code='$pcode'";
    $result=mysqli_query($con,$sql) or die("uproblem");
  echo '0';
}
mysqli_close($con);
?>