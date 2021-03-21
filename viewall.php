<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View all</title>
<link rel = "icon" href ="/books_shop/logo/brand.png" type = "image/x-icon"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
  <!--icon library-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>  
    

<!--header script link-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>
html,body
  {
    overflow-x:hidden;
  }

</style>
</head>

<body>
<?php include 'header.php';?>

    <?php  
include 'connection.php';
$limit = 18; 
$category=$_GET['category'];

 //Category of book change according to user click. 

if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit; 
$sql ="SELECT P_code, P_name, P_month, P_year, P_price, off, P_image FROM bookshop_master where P_cat_type='$category' ORDER BY pdate DESC LIMIT $start_from, $limit";

$result = mysqli_query($con,$sql);
//main content block
?>
<div class="container-fluid">
<div class="row" style="max-width:100%; ">

<?php
while($row = mysqli_fetch_array($result))
{
 
  ?>
  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6  col-6 " style="float:left;">
  <!--1 image-->
<div class="item-a">
  <!--slider-box-->
  <!--image-->
  <div class="box">
    
    <?php echo '<a href="buybook.php?P='.$row[0].'">';
      echo'<img src="admin\productimage/'.$row[6].'" width="100%" style="height: 180px;">'; ?>
  </a>
    <!--details-->
    <div class="" style="align-items:center; display: flex; flex-direction: column;">
     <!-- Book Name-->
     <span style="white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; width:250px; text-align:center;"> <?php  echo $row[1]; ?></span>
      <!--Author Name--><span >      <?php echo $row[2]." - ".$row[3] ;?> </span>
      <i class="fa fa-inr" aria-hidden="true"> 
      <?php $price= number_format($row[4])- (number_format($row[4])*number_format($row[5])/100); echo $price;?> 
       &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> <?php echo $row[4] ;?></del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);"><?php echo $row[5];?>% off</strong></i>
    <!--character-details-->
  </div>
  </div>
</div>
</div>
<?php
}
//end of main content block
?>
</div>

<div>
<!---->

<!--Total numbers of page 
// appear after main content
 -->
 <br>
 <div class="container-flex">
 <div class="row">
 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 " style="float:left;">
 <?php  

$result_db = mysqli_query($con,"SELECT COUNT(P_code) FROM bookshop_master where P_cat_type='$category'"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='viewall.php?page=".$i."&category=$category'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  

?>
</div>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>