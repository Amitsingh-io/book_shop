<?php

include 'connection.php';
$sql='';

$uploadDir = 'productimage/'; 
$pcode=$_POST['pcode'];
$pname = $_POST['pname']; 
$pub = $_POST['ppub'];
$aut= $_POST['pauthor'];
$lang=$_POST['plang'];
$edi=$_POST['pedi'];
$isbn=$_POST['pisbn'];
$yer=$_POST['pyear'];
$mnt=$_POST['pmonth'];
$bind=$_POST['pbind'];
$sub=$_POST['psub'];
$cls=$_POST['pclass'];
$price=$_POST['pprice'];
$cat=$_POST['pcate'];
$rack=$_POST['prack'];
$prow=$_POST['prow'];
//$newstk=$_POST['nstock'];
 
        //Upload file 
        $uploadedFile = ''; 
        if(!empty($_FILES["file"]["name"])){ 
             
            // File path config 
            $fileName = basename($_FILES["file"]["name"]); 
            $targetFilePath = $uploadDir . $fileName; 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            // Upload file to the server 
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                    $uploadedFile = $fileName; 
                }
                //echo $email;  
        } 
        $date= date('Y-m-d');
      $sql1="select P_image from bookshop_master where P_code='$pcode'";
      $result=mysqli_query($con,$sql1);
      if($row1=mysqli_fetch_array($result))
      {$file='productimage/'.$row1[0];
          unlink($file);
      }

      $sql="update bookshop_master set P_publication='$pub',P_author='$aut',P_language='$lang', P_edition='$edi',P_isbn='$isbn', P_year='$yer',P_month='$mnt', P_binding='$bind', P_sub='$sub', P_class='$cls',P_price='$price',P_cat_type='$cat',P_image='$fileName',pdate='$date',prack='$rack', prow='$prow' where P_code='$pcode'";
      $result=mysqli_query($con,$sql) or die("problem....");
      
      mysqli_close($con);

      echo "Success...";
      
?>