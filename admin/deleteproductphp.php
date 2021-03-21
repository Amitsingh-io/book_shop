<?php
include 'connection.php';
$pcode= $_POST['pcode'];

$sql1="select P_image from bookshop_master where P_code='$pcode'";
$result=mysqli_query($con,$sql1);
if($row1=mysqli_fetch_array($result))
{$file='productimage/'.$row1[0];
    unlink($file);
}

$sql="delete from bookshop_master where P_code='$pcode'";
$result=mysqli_query($con,$sql) or die("problem....");
      
mysqli_close($con);
echo "Item deleted....";
?>