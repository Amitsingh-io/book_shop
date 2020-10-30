<?php
$servername="localhost";
$username="root";
$pass="";
$con=mysqli_Connect($servername,$username,$pass)or die("There is some problem in mysql connection");
$db="book_shop";
$sdb=mysqli_select_db($con,$db) or die("Problem in database connection");


 $uploadDir = 'productimage/'; 
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
 $stk=$_POST['istock'];
  
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
         
       $sql="insert into bookshop_master(P_name,P_publication,P_author,P_language,P_edition,P_isbn,P_year,P_month,P_binding,P_sub,P_class,P_price,P_cat_type,P_current_stock,P_image,pdate) values('$pname','$pub','$aut','$lang','$edi','$isbn','$yer','$mnt','$bind','$sub','$cls','$price','$cat','$stk','$fileName','$date')";
       $result = mysqli_query($con,$sql)or die("proble") ;
       /*$sql="insert into bookshop_master(P_name) values('$pub')";
       $result= mysqli_query($con,$sql) or die("pb");*/
       
       echo "success...";
?>