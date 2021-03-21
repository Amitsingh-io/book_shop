<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!--icon library-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
      <!--/Bootstrap css-->
      <!-- own css file link-->
      
      
      
      <!--/own css-->
       <!-- own css header link-->
       <link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
      <!-- end of header css-->
      <link rel="stylesheet" type="text/css" href="css/bookdetailscs.css" >
      <!--/own css-->
<!--header script link-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--end of header script link-->

    <title>Sell Book</title>


    <style>      
      
      *{
  max-width:100%;
}
      /* fix padding under menu after resize */
      /*for small screen*/
      @media screen and  (max-width:720px)
      {
       
        .bookimg
        {
         width:75%;
        height:400px;
        /* background-color:red;*/
         margin-left:13%;
        }
        .book-details
        {
          margin-left:10px;
          width:80%;
        }
        .footer
        {
          display:block !important;
        }
        .action{
          display: none !important;
        }
        
      }
      
      @media screen and (min-width:721px)
      {
       .bookimg
       {
         width:25%;
        height:400px;
       }
       .book-details
       {
         margin-left:30px;
       }
       .footer
        {
          display:block !important;
        }
        .action
        {
          display: none !important;
        }
       
      }
      @media screen and (min-width:721px) and (max-width:992px)
      {
        .bookimg
        {
          width:50%;
          height:400px;
          margin-left:22%;
          background-color:green;
        }
        .footer
        {
          display:block !important;
        }
        .action
        {
          display: none !important;
        }
        
      }
      @media screen and (min-width: 993px) and (max-width: 1199px) {
        .info1
        {
          margin-left:460px !important;
         
        }
        .info2
        {
          margin-left:500px;
        }
        .action
        {
          width:240px !important;
        }
      }
      @media screen and (min-width:992px) and (max-width: 992px) {
        .info1
        {
          margin-left:250px !important;
         
        }
        .info2
        {
          margin-left:500px;
        }
        
        
      }
      @media screen and (min-width: 491px) and (max-width: 991px)
      {
        .info1{
          margin-left: 10px !important;
          margin-top:auto !important;
        }
        .info2{
          margin-left: auto !important;
          margin-top: auto !important;
        }
      }
      @media screen  and (max-width: 490px) {
        .info1
        {
         margin-left:20px !important;
         margin-top:20px !important;
        }
        .info2
        {
         margin-top:-10px !important;
         margin-left: -10px !important;
        }
      }
      @media screen and (min-width: 993px){
        .footer
        {
          display:none !important;
        }
        .action
        {
          display: block !important;
          display:flex  !important;
        }
      }
      
      /*end of media query*/
    .book
    {
      margin-top:20px;
    }
     .bookimg{
       background-color:red;
       
     }
     .price{
       font-size:25px;   
       font-style:bold;
        }
        .off
        {
          color:green;
        }
        .check
        {
          width:100px; height:35px; 
          display:inline-block; 
          background-color:#fb641b ; 
          color:white;
          margin-bottom:20px;
          border-top:6px #fb641b  solid;
          border-left:0px #fb641b  solid;
          border-radius:2px;
        }
        .pincode
        {
          border:1px #fb641b solid; 
          height:35px; display:inline;
        }
        a
        {
          text-decoration:none;
          /*text-align:center;*/
        }
        #check:hover
        {
          color:white;
        }
        .check-av
        {
          display:block;
          margin-top:-10px; 
       }
       .stock-box
       {
         margin-top:-10px;
        border: 1px #fb641b solid;
        width:180px;
        height:88px;
       }
       .stock-box p
       {
         margin-left:15px;
       }
       .in-stock
       {
         margin-top:-10px;
         color:green;
         font-style:bold;
       }
       .stock-left
       {
         margin-top:-10px;
         color:#525151;
       }
       .info1
       {
        height: 90px;width: auto; margin-left:510px; margin-top:-65px;
       }
       .info2
       {
        height: 90px;width: auto; margin-left:10px; margin-top:-65px;
       }

       .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   z-index: 2;
   color: white;
   text-align: center;
   display:inline-block;
   height: 40px;
}
.addtocart
{
  width: 50%;
  height: 100%;
  background-color: rgb(105, 54, 52);
  color: white;
  float: left;
}
.buynow
{
  width:50%;
  height: 100%;
  background-color: orangered;
  color:white;
  float:left;
  
}
.footer 
       {
         display: none;
         
       }
    .action
    {display:flex  ;
      width:285px;
      background-color:black;
      margin-left: -15px;
      margin-top:-70px; /*-30 */
      height: 40px;
    }
    .addtocart-f
    {
     width:50%;
     background-color: rgb(105, 54, 52);
     color:white;
     
    }
    .buynow-f
    {
      width:50%;
      background-color:#e75710;
      color: white;
     
    }
    .smbook/* similar books image*/
    {
      width:85%;
      margin-left: 10px;
      height: 230px;
      background-color: red;
      margin-bottom: 20px;
    }
    .smimg
    {
      width: 100%;
      height: 100%;
    }
    .productgroup
    {
      margin-left: 40px;
      
    }
    .thd
    {
      margin-left: 70px; display: block;
      color: gray;
    }
  </style>
</head>

<body >
  <!--<div class="isize" style="width:100px; background-color: red; height: 100px;">

  </div>
  <div class="ibsize" style="width:100px; background-color: green; height: 200px;"> </div>
-->
          <?php include 'header.php'?>

         
  <?php
    include 'connection.php';
    //$sql="select cat_type from category";
    //$result=mysqli_query($con, $sql);
    //$row=mysqli_fetch_array($result);
    $p=$_REQUEST['P'];
    $sql="select * from bookshop_master where P_code= '$p'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

   /*if(!$row)
   {
     ?>
     <script> alert("Invalid Product Code");</script> 
    <?php
   }
*/  ?>

  <div class="container">
          <div class="row book">
            <!-- book image section -->
            <div class="bookimg " id="bookimg">
            <!-- <img src="imge/14283.jpg" style="width:100%; height:100%;"alt="book Image">-->
              <?php
              echo'<img src="admin\productimage/'.$row[13].'" style="width:100%; height:100%; " alt="book Image">';
              ?>
            </div>
            <!--book details section-->
            <div class="book-details ">
              <h4 style="color: #525151;" class="bname"> <!--प्रतियोगता दर्पण--> <?php echo $row[1];?> </h4>
              <p style="color:#525151;" class="aname"><?php echo $row[3];?> </p>
              <p><strong>Language:</strong> <span class="blang"><?php echo $row[4];?> </span> &nbsp;&nbsp;&nbsp;&nbsp; <strong>Binding: </strong><span class="btype"></span> <span><?php echo $row[9];?> </span></p>
              <hr style="width:100%;">
              <div>
                <p style="display:block; margin-top:-10px;">
                  <span style="color:#525151;" class="price" ><i class="fa fa-inr" aria-hidden="true"></i><strong>  <?php $price= number_format($row[12])- (number_format($row[12])*number_format($row[17])/100); echo $price;?></strong></span>
                  &nbsp; &nbsp;
                  <span style="color:#525151" class="dis"><i class="fa fa-inr" aria-hidden="true"></i> <del> <?php echo $row[12];?><del></span>
                  &nbsp; &nbsp;
                  <span  class="off"><strong><?php echo $row[17];?>% off</strong></span>  &nbsp; &nbsp; &nbsp;
                  <span class="save"> Your Save:&nbsp;<i class="fa fa-inr" aria-hidden="true"></i> <span class="tsave"><?php echo (number_format($row[12])*number_format($row[17])/100); ?> </span>Inclusion of all taxes</span>
              </p>
              <p>
              Quantity &nbsp; &nbsp; <input type="number" min='1' id= "qty" value="1" max="<?php echo $row[15];?>" style="width:50px;";/> 
              </p>
              <p class="check-av"><i class="fas fa-map-marker-alt"></i>&nbsp; Check Availability</p>
              <p>
                <input type="text" class="pincode" style="" placeholder="Enter Pincode">

                <a href="#" class="check" id="check" style="text-align:center; "> Check</a>
              </p>
              <p style="display:block; margin-top:-30px;">
              Generally delivered in 5-10 days
              </P>
              <p class="txt"><i class="fas fa-map-marker-alt"></i> MohanBooks assured you <span style="color:#878787;">with genuine product guarantee</span> </p>
            </div>
            
            <div class="stock-box">
               <p class="stock-part">Stock Availability:</p>
               <p class="in-stock" id="instock">In Stock
               
               </p>
               <p class="in-stock" id="outstock" style="color:red;">
               Out Of Stock <p>
               <p class="stock-left">Only few left in stock</p>
            </div>
           
            
          </div><!--end of bookdetails div-->
         

          <div class="info1"style="">
            <p>
              <i class="fa fa-check-square-o" aria-hidden="true"></i>
               Avaibility - <span  id="instock"> In stock</span>
            </p>
            <p>
              <i class="fa fa-clock-o" aria-hidden="true"></i> Dispatched within <b>72 hours</b>
            </p>
           </div>
           <div class="info2"style="">
            <p>
             &nbsp;&nbsp; &nbsp;&nbsp; <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 100% Genuine guarantee
            </p>
            <p>
              &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-inr" aria-hidden="true"></i> The price is inclusive of all taxes
            </p>
           </div>
        </div><!--end of first row-->

         <!-- Show instock or out of stock accroding to stock-->
         <?php
          
          if(number_format($row[15])==0)
          {?>
              <script> 
              $("#instock").hide();
              $("#outstock").show();
              </script>
            <?php
          }
          else
          {?>
            <script> 
            $("#instock").show();
            $("#outstock").hide();
            </script>
          <?php

          }
          ?>
        <div class="action">
          <div class="addtocart-f addtocartc" id="addtocart" value="" style="cursor:pointer;">
            <p style="text-align: center; margin-top: 7px; ">ADD TO CART</p>
          </div>
          <div class="buynow-f buynowc" id="buynow" value="" style="cursor:pointer;">
            <p style="margin-top: 7px; text-align: center;" >BUY NOW</p>
          </div>
        </div>
        <br><br><br>
        <div class="footer">
          <div class="addtocart addtocartc" id="addtocart" value="" style="cursor:pointer;">
            <p style="margin-top:5px; ">ADD TO CART</p>
          </div>
        <div class="buynow buynowc" id="buynow" value="" style="cursor:pointer;" >
         <p style="margin-top:5px; " >BUY NOW</p>
        </div>
      </div>
      
      </div><!--end of container-->
     <hr>
     <P><h4 style="margin-left: 20px;">Similar Items</h4></P><hr>
      <div class="container-flex">
        
       
        <div class="row" >
        <?php

            $sql="select P_image,P_code from bookshop_master where P_cat_type='$row[14]' and P_code<>'$row[0]' ORDER BY pdate DESC LIMIT 6";
            $result=mysqli_query($con,$sql);
            while($row1=mysqli_fetch_array($result))
            {
              ?>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6" >
            <div class="smbook">
              <?php 
              echo '<a href="buybook.php?P='.$row1[1].'">';
              echo '<img src="admin\productimage/'.$row1[0].'" class="smimg">';
              ?>
              </a>
            </div></div>
              <?php
            }


        ?>
        </div>
        <!--
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6" >
            <div class="smbook">
              <img src="#" alt="image" class="smimg">
            </div>
          </div>

            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
              <div class="smbook">               
                 <img src="#" alt="image" class="smimg">
              </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                <div class="smbook">
                  <img src="#" alt="image" class="smimg">
                </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                  <div class="smbook">
                    <img src="#" alt="image" class="smimg">
                  </div>
                  </div>

                  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="smbook">
                      <img src="#" alt="image" class="smimg">
                    </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                      <div class="smbook">
                        <img src="#" alt="image" class="smimg">
                      </div>
                      
                      </div>

          </div>
        </div>--><!--end of similar books image container-->
        
        <br><hr>
        <h5 style="margin-left: 20px;">Product Detail</h5>
          
<div class="container">
  <div class="row">
     <table style="margin-left:30px;">
          <thead>
           <tr>
              <th class="th">Publisher</th>
              <th class="thd"><?php echo $row[2]?></th>
           </tr>
        </thead>

        <thead>
           <tr>
              <th class="th">ISBN</th>
              <th class="thd"> <?php echo $row[6]?></th>
           </tr>
        </thead>
<!--
         <thead>
           <tr>
              <th class="th">ISBN 13</th>
              <th class="thd">9780190122096</th>
           </tr>
        </thead>
-->
        <thead>
           <tr>
              <th class="th">Edition</th>
              <th class="thd"><?php echo $row[5]?></th>
           </tr>
        </thead>

         <thead>
           <tr>
              <th class="th">Publication Year</th>
              <th class="thd"><?php echo $row[7]?></th>
           </tr>
        </thead>
        <thead>
          <tr>
             <th class="th">Publication Month</th>
             <th class="thd"><?php echo $row[8]?></th>
          </tr>
       </thead>

         <thead>
           <tr>
              <th class="th">Language</th>
              <th class="thd"><?php echo $row[4]?></th>
           </tr>
        </thead>

        <thead>
           <tr>
              <th class="th">Binding</th>
              <th class="thd"><?php echo $row[9]?></th>
           </tr>
        </thead>
        
        <thead>
           <tr>
              <th class="th">Author</th>
              <th class="thd" ><?php echo $row[3]?></th>
           </tr>
        </thead>
       </table>
          
  </div>
  </div>
  <br>
   <br>
   <?php include "footer.php";?>
  
  
   
          <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
          
          <script>
         $(document).ready(function(){
          $(".buynowc").click(function(e)
          { e.preventDefault();
          var cuser= $("#username").text();
          //alert(cuser);
            if(cuser=="User")
            {
             $("#loginModalCenter").modal("show");
            }
            else{
              var qty = $("#qty").val();
              
              window.location.href="checkout.php?P=<?php echo $p;?>&q="+qty+"";
            }
          });
//Add to cart
          $(".addtocartc").click(function(e)
          { e.preventDefault();
          var cuser= $("#username").text();
          //alert(cuser);
            if(cuser=="User")
            {
             $("#loginModalCenter").modal("show");
            }
            else{
             var qty= $("#qty").val();
             var pcode= <?php echo $p;?>;
            // alert(pcode);
             $.ajax({
              url:"addcartphp.php",
              type:"POST",
              
              data:{pcode:pcode,qty:qty},
              success:function(data)
              {
                //alert(data);
                $(".cart1").text(data);//this class from header.php to update cart value
                window.location.href="cart.php";
              }
             });
              
            }
          });
         });
            
          </script>
          
</body>
</html>