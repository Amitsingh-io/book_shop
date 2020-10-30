<?php


$check=$_POST['val'];
// if $check= 1 then search with product code
//if $check==2 then search with product name and language
//if $check=3 then fetch language according to product name;

$servername="localhost";
$username="root";
$pass="";
$con=mysqli_Connect($servername,$username,$pass)or die("There is some problem in mysql connection");
$db="book_shop";
$sdb=mysqli_select_db($con,$db) or die("Problem in database connection");
$sql='';
if($check=='1')
{
    $pcode=$_POST['pcode'];
    $sql="select * from bookshop_master where P_code='$pcode'";
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
    $sql="select * from bookshop_master where P_name='$pname'";
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
mysqli_close($con);
 

?>