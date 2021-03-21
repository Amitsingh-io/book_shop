<?php

include 'connection.php';
$uid=$_COOKIE['user_id'];

    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $landmark=$_POST['landmark'];
    $loc=$_POST['loc'];
    $add=$_POST['add'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pin=$_POST['pin'];
    $altmob=$_POST['altmob'];

      $sqlu="select user_id from useraddress where user_id='$uid'";
      $resultu=mysqli_query($con,$sqlu);
      if($rowu=mysqli_fetch_array($resultu))
      {
        $sql="update useraddress set username='$name',mobilenumber='$mob',landmark='$landmark',locality='$loc',address='$add',state='$state',district='$city',pincode='$pin',altmobile='$altmob' where user_id='$uid'" ;
        $result=mysqli_query($con,$sql) or die("problemmssss");
        echo "Record update successfully";
      }
      else
      {
        $sql="insert into useraddress (user_id,username,mobilenumber,landmark,locality,address,state,district,pincode,altmobile) values('$uid','$name','$mob','$landmark','$loc','$add','$state','$city','$pin','$altmob')" or die("pr");
        $result=mysqli_query($con,$sql) or die('problem');
        echo"Record Save Successfully....";
      }
?>