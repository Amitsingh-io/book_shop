<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mohan Books</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
  <!--icon library-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>  
    
<!--own header css link-->
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>

<!--end of own header css link-->
<!--header script link-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--end of header script link-->
<!--Jquery-->

</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>
  /*fade image*/
  
  html,body {overflow-x: hidden;}

  
   #stage {
	 margin: 0 auto;
    width:100%;
    height: 292px;
  }

  #stage a {
    position: absolute;
  }
  #stage a img {
   /* padding: 10px;*/
    border: 1px solid #ccc;
    background: #fff;
  }

  #stage a:nth-of-type(1) {
    animation-name: fader;
    animation-delay: 3s;
    animation-duration: 3s;
    z-index: 0;
    /*2*/
  }
  #stage a:nth-of-type(2) {
    z-index: 0;
    /*1*/
  }
  #stage a:nth-of-type(n+3) {
    display: none;
  }

  @keyframes fader {
    from { opacity: 1.0;  }
    to   { opacity: 0.0; }
  
    }


  </style>

</head>

<body>
<!--include header navbar and categroies-->
  <?php include 'header.php';  ?>  
  <?php
   include 'connection.php';
   $sql="select cat_type from category";
    $result=mysqli_query($con, $sql);
    //$row=mysqli_fetch_array($result);

  ?>
  
    
<!--fade image start-->
<div > <h3 style="color:red;"> Website under construction. All Data to Be Dummy...... Stay Tuned</h3></div>
<div id="stage" >
<a href=""><img src="imge/1.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/2.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/3.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/1.jpg" width="100%;" height="300px;"></a>

</div>


<!--fadeimage end-->
<!--Monthly magazine-->


  
<div class="l-magazine-sec col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >
  <h5 class="l-magazine">Monthly Magazine 
  <a href="viewall.php?category=Monthly Magazine ">
   <input type="button" value="View All" class="button mr-3">
   </a></h5>
</div>
  
  <div class="container-fluid">
    <div class="row" >
		<!--slider------------------->
		<ul id="autoWidth" class="cs-hidden" style="margin-top:-13px; ">
    <?php
    $sql ="SELECT P_code, P_name, P_month, P_year, P_price, off, P_image FROM bookshop_master where P_cat_type='Monthly Magazine' ORDER BY pdate DESC LIMIT 7";

    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
     // echo $row[0].$row[1];
?>
     <li class="item-a">
	  <!--slider-box-->
		<div class="box">
    
		<!--image-->
    <?php echo '<a href="buybook.php?P='.$row[0].'">';
      echo'<img src="admin\productimage/'.$row[6].'"  style="height: 180px; width:100%;">'; ?>
    </a>
		<!--details-->
		<div class="details">
		<!--logo-character-->
  <span style="white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; width:150px; text-align:center;"> <?php  echo $row[1]; ?></span>
     <!-- <br>Author Name-->
     <span >      <?php echo $row[2]." - ".$row[3] ;?> </span>
      <i class="fa fa-inr" aria-hidden="true">
       <?php $price= number_format($row[4])- (number_format($row[4])*number_format($row[5])/100); echo $price;?> 
       &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> <?php echo $row[4] ;?></del> &nbsp;&nbsp;<strong style="color:green;"><?php echo $row[5];?>% off</strong></i>
		<!--character-details-->
		
		</div>
		</div>
		</li>
    <?php
    }

    ?>




    </ul>

  </div>
  </div>

  <div class="l-magazine-sec">
    <h5 class="l-magazine">Educational 
    <a  href="viewall.php?category=Motivational">
    <input type="button" value="View All" class="button mr-3"   >
    </a>
    </h5>
  </div>
  <br>
  <div class="container-fluid" >
    <div class="row" style="max-width:100%;">
<?php
    $sql ="SELECT P_code, P_name, P_author, P_price, off, P_image FROM bookshop_master where P_cat_type='Motivational' ORDER BY P_price DESC LIMIT 4";
    
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
     // echo $row[0].$row[1];
?>
 <div class="col-lg-3 col-md-3 col-sm-6 col-6 " style="float:left;">
  <!--1 image-->
<div class="item-a">
  <!--slider-box-->
  <!--image-->
  <div class="box1" style="width:95%;">
    
    <?php echo '<a href="buybook.php?P='.$row[0].'">';
      echo'<img src="admin\productimage/'.$row[5].'" width="100%" style="height: 180px;">'; ?>
  </a>
    <!--details-->
    <div class="" style="align-items:center; display: flex; flex-direction: column;">
     <!-- Book Name-->
     <span style="white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; width:250px; text-align:center;"> <?php  echo $row[1]; ?></span>
      <!--Author Name--> <?php echo $row[2];?>
      <i class="fa fa-inr" aria-hidden="true"> 
      <?php $price= number_format($row[3])- (number_format($row[3])*number_format($row[4])/100); echo $price;?> 
       &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> <?php echo $row[3] ;?></del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);"><?php echo $row[4];?>% off</strong></i>
    <!--character-details-->
  </div>
  </div>
</div>
</div>
<?php
    }

    ?>

</div>
</div>
 
 <!--motivational-->
&nbsp;
&nbsp;
 <div class="l-magazine-sec">
  <h5 class="l-magazine">Motivational
  <a  href="viewall.php?category=Motivational">
   <input type="button" value="View All" class="button mr-3" >
   </a>
   </h5>
</div>
<br>
<div class="container-fluid">
  <div class="row" style="max-width:100%;">
<?php

    $sql ="SELECT P_code, P_name, P_author, P_price, off, P_image FROM bookshop_master where P_cat_type='Motivational' ORDER BY pdate DESC LIMIT 4";
    
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
     // echo $row[0].$row[1];
?>
 <div class="col-lg-3 col-md-3 col-sm-6  col-6 " style="float:left;">
  <!--1 image-->
<div class="item-a">
  <!--slider-box-->
  <!--image-->
  <div class="box1" style="width:95%;">
    
    <?php echo '<a href="buybook.php?P='.$row[0].'">';
      echo'<img src="admin\productimage/'.$row[5].'" width="100%" style="height: 180px;">'; ?>
  </a>
    <!--details-->
    <div class="" style="align-items:center; display: flex; flex-direction: column;">
     <!-- Book Name-->
     <span style="white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; width:250px; text-align:center;"> <?php  echo $row[1]; ?></span>
      <!--Author Name--> <?php echo $row[2];?>
      <i class="fa fa-inr" aria-hidden="true"> 
      <?php $price= number_format($row[3])- (number_format($row[3])*number_format($row[4])/100); echo $price;?> 
       &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> <?php echo $row[3] ;?></del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);"><?php echo $row[4];?>% off</strong></i>
    <!--character-details-->
  </div>
  </div>
</div>
</div>
<?php
    }

    ?>
    </div>
</div>


<!--channel partner-->
&nbsp;
<br>
<br>
  <div class="container-fluid">
    <div class="row"  >
    <hr style="width:100%; border-top: 1px solid red;">
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
      <img src="partnerimg/arihant.png" style="width:95%;">
      </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
      <img src="partnerimg/cambridgeuniv.png" style="width:95%;">
      </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
      <img src="partnerimg/disha.png" style="width:95%;">
      </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
      <img src="partnerimg/mcgrawhill.png" style="width:95%;">
      </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
      <img src="partnerimg/oxford.png" style="width:95%;">
      </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
      <img src="partnerimg/person.png" style="width:95%;">
      </div>
      <hr style="width:100%; border-top: 1px solid red;">
    </div>
    &nbsp;
<br> 
  </div>
  <?php include 'footer.php'; ?>
  &nbsp;



<!--end of channel partner-->
<!--<script src="jquery-3.5.1.min.js"></script>-->
<script src="./conscript.js" type="text/javascript>"></script>
<script src="js/script.js" type="text/javascript"></script>


    <script>
//fade image js
  window.addEventListener("DOMContentLoaded", function(e) {

    var stage = document.getElementById("stage");
    var fadeComplete = function(e) { stage.appendChild(arr[0]); };
    var arr = stage.getElementsByTagName("a");
    for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false);
    }

  }, false);
//fade image js
</script>
</body>
</html>