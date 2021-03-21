<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
     *{
  max-width:100%;
}
.bname
{   width: 100%;
    white-space: nowrap; 
    overflow: hidden;
  text-overflow: ellipsis; 
  
}
.bimg{
    width: 100%;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 10px;
   width: 100%;
   z-index: 2;
   color: black;
   text-align: center;
   
   height: 40px;
   display: flex;
   
}


</style>
</head>
<body>
<?php include 'header.php';

include 'connection.php';
$uid= $_COOKIE['user_id'];
//echo $uid;

$sql= "select P_code,quantity from cart where user_id='$uid' ORDER BY cdate DESC" or die("problem");
$result=mysqli_query($con,$sql);
   
?>

    <br>
    <br>

    <div class="container-flex" id="mobileview">
        <div class="row">
    <div class="col-xl-7 col-lg-7 col-md-11 col-sm-11 col-11"><!--first grid-->
        <!--code will be repeat in while loop -->
        <?php
        $tem=0; $tprice=0; //exculde shipping charge
       
            while($row=mysqli_fetch_array($result))
            {$tem++;
                $sql1="select P_name,P_language,P_image,P_price,off from bookshop_master where P_code='$row[0]'" or die("problem");
                $result1=mysqli_query($con,$sql1);
                if($row1=mysqli_fetch_array($result1))
                {
        ?>
            
            <br>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-10 col-sm-8 col-8">
                <div>
                   <h5 class="bname ml-3"><?php echo $row1[0];?></h5>
                   <div class="ml-3"><strong >Language:</strong> <?php echo $row1[1];?></div>
                    
                
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-3 col-3" >
                <div class="bimg"style="">
                <?php
                  echo '<img src="admin\productimage/'.$row1[2].'" style="width:100px; height:90px;">';
                  ?>
                </div>
            </div>
        </div>
        
        <div class="row mt-2" >
            <div class="col-xl-6 col-lg-6 col-md-10 col-sm-7 col-7">
            
                <div style="width:100%;" class="ml-3">
                    <i class="fa fa-inr" aria-hidden="true" style="font-size:24px;">
                   <strong class="bprice" >
                   <?php
                   $p = number_format($row1[3])- (number_format($row1[3])*number_format($row1[4])/100); 
                   echo $p;
                    $tprice+=$p*$row[1];
                   ?>
                   </strong></i>&nbsp;&nbsp; &nbsp;

                    <i class="fa fa-inr" aria-hidden="true"></i>
                   <del class="boprice" style="color: gray;">  <?php echo $row1[3];?></del> <span style="color: green;"> <?php echo $row1[4];?>% off</span>

                </div>
            
            </div>
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-3 col-3">
               <div style="width: 100%;">
                <label>Qty.</label>
              <!-- <input type="number" class="qty" id="qty<?php echo $tem;?>" min="1" style="width:33%;" value="<?php //echo $row[1]; ?>">   -->
              <?php echo $row[1]; ?>
               </div>
               
            </div>
        </div>
        
        <div class="row ">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 ml-3">
            <a style="width:50%; background-color: orangered; color: white; text-align: center; cursor: pointer; display: block;" class="remove"  onclick="remove(<?php echo $row[0];?>);">
               <span > Remove </span>
            </a>
            </div>

        </div>
       
       <?php
                }    
        }
        ?>
        
    </div><!--end of first grid-->
       
       <?php
       //for calculate shipping charges...
       /*0 to 350-> shipping charge- 20Rs
       351 to 750-> shipping charge- 15 Rs
       751 to 2000-> shipping charge-10 Rs
        More than 2000 shipping charge-0 Rs.
       */
      $scharge=0; // for shipping charge 
      $tpay=0;//inculde shipping charge price
       if($tprice <=350)
       {
        $scharge=20; $tpay=$tprice + $scharge;
       }
       else if($tprice<=750)
       {
         $scharge=15; $tpay=$tprice + $scharge;
       }
       else if($tprice<=2000)
       {
        $scharge=10; $tpay=$tprice + $scharge;
       }
       else{
        $scharge=0; $tpay=$tprice + $scharge;
       }
       ?>

    <div class="col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11">
        <div class="row">
            <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                <hr style="border-top:  1px solid orangered;">
                <h4 class="ml-3">
                    Price Details
                </h4>
                <hr style="border-top: 1px solid grey">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5  col-sm-5 col-5 ml-3">
                Price(<?php echo $tem; ?> Items)
            </div>
            <div class="col-xl-5 col-lg-5 col-sm-5 col-5">
                <div  style="float:right">
                <i class="fa fa-inr" aria-hidden="true"  ></i>
                <span class="totalprice"> <?php echo $tprice;?> </span>
                </div>
               
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5  col-sm-5 col-5 ml-3">
                Shipping Charges
            </div>
            <div class="col-xl-5 col-lg-5  col-sm-5 col-5">
                <div  style="float:right">
                    <i class="fa fa-inr" aria-hidden="true"  ></i>
                    <span class="dcharge"> <?php echo $scharge;?></span>
                    </div>
            </div>
        </div>
       <br>
            <div class="row">
            <div class="col-xl-5 col-lg-5 col-sm-5 col-5 ml-3">
                Amount payable
            </div>
            <div class="col-xl-5 col-lg-5 col-sm-5 col-5">
                <div  style="float:right">
                    <i class="fa fa-inr" aria-hidden="true"  ></i>
                    <span class="subtotal"> <?php echo $tpay;?></span>
                    </div>
            </div>
           
            </div>
        </div>   
        </div><!--end of first row-->

    </div><!--end of first container-->
  
          <br>
          <br>
          <br>
            <div class="footer" >
               <div style="width: 50%;">
                    <div class="ml-3" style="background-color: orangered; color:white; width:95%; height: 100%;; border-radius: 5px; text-align: center; ">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i>
                         <a href="index.php" style="text-decoration: none; color: white;"class="conshop" >Continue Shopping </a>
                    </div>
               </div>
                <div style="width: 50%;">
                   <div style="float:right; background-color: orangered; color:white; width: 95%; height: 100%; border-radius: 5px; text-align: center;" class="mr-3">
                    <a href="checkout.php?P=cart" class="placeorder" style="color: white;">Check Out </a>
                     <i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i>
                   </div> 
            </div>

            </div>
            <?php include "footer.php";?>
<br><br>
   <script>
    
    function remove(e)
    {
        //alert(e);
        var pcode=e;
      $.ajax({
        url:"removeitemphp.php",
        type:"POST",
        data:{pcode:pcode},
        success:function(data)
        {   
            $(".cart1").text(data);// this class from header. to update cart value
            //alert(data);
             window.location.href = "cart.php";
        }
      });
        
    }
   </script>
   <!--cart value -->

   <script>
   $(document).ready(function()
   { $(".cart1").text("<?php echo $tem; ?>");

   });
       
        </script>
</body>
</html>