<?php
include 'connection.php';
$check=$_POST['val'];
// if $check= 1 then search with product code

//if $check=2 then fetch language according to product name;

$sql='';
if($check=='1')
{
    $pcode=$_POST['pcode'];
    $sql="select P_name,off from bookshop_master where P_code='$pcode'";
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
    $sql="select P_code,off from bookshop_master where P_name='$pname'";
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
 
    $noff=$_POST['noff'];

    $sql="update bookshop_master set off='$noff' where P_code='$pcode'";
    $result=mysqli_query($con,$sql) or die("uproblem");
    echo '0';
}
mysqli_close($con);
?>