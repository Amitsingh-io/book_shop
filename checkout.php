<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
<link rel = "icon" href ="/books_shop/logo/brand.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!--icon library-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
      <!--/Bootstrap css-->
      <!-- own css header link-->
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
      <!-- end of header css-->
      <link rel="stylesheet" type="text/css" href="css/bookdetailscs.css" >
      <!--/own css-->
<!--header script link-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--end of header script link-->
   
    <style>
        html,body {overflow-x: hidden;}
      .txt
      {
        width: 100%;
        height:40px;
        border-radius: 5px;
        margin-bottom: 20px;
      }
      .login:hover
      {
        cursor:pointer;
      }
     
     /* @media screen and(min-width: 991px) {
        .content
        {
          display: flex !important;
          float: left;
        }
      }
      @media screen and (max-width: 991px){
        .accordion
        {
          width:90% !important;
          
        }
      }*/
      /*remove arrow from input type number */
      input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
    </style>
</head>
<body>
<?php include 'header.php';

include 'connection.php';
//$sql="select cat_type from category";
    //$result=mysqli_query($con, $sql);
    //$row=mysqli_fetch_array($result);
    
    //check user is new or old
    $uid=$_COOKIE['user_id'];
     /* $sqlu="select user_id from useraddress where user_id='$uid'";
      $resultu=mysqli_query($con,$sqlu);
      if($rowu=mysqli_fetch_array($resultu))
      {
        ?>
        <script>
        alert("<?php echo $rowu[0]?>");
        </script>
        <?php
      }
     */
    //end of check user is new or old


    $p=$_REQUEST['P'];
    $titem=0; $tprice=0; $tsaving=0;
    if($p=="cart")
    {
    $sql="select P_code,quantity from cart where user_id='$uid'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
      $sql1="select P_price,off from bookshop_master where P_code='$row[0]'";
      $result1=mysqli_query($con,$sql1);
      $row1=mysqli_fetch_array($result1);
      
    $titem+=$row[1];
    $tprice+= (number_format($row1[0])- number_format($row1[0])*number_format($row1[1])/100)* number_format($row[1]);
    $tsaving+=(number_format($row1[0])*number_format($row1[1])/100)*number_format($row[1]);
    }
      
    }
    else
    {
      $q=$_REQUEST['q'];
      $sql="select P_price,off from bookshop_master where P_code='$p'";
   $result=mysqli_query($con,$sql);
   
   $row=mysqli_fetch_array($result);
   
    $titem=$q;
    $tprice= (number_format($row[0])- number_format($row[0])*number_format($row[1])/100)* number_format($q);
    $tsaving=(number_format($row[0])*number_format($row[1])/100)*number_format($q);
    
   
    }
   // echo $p;
   
?>  

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

<br>
  
  <div class="container-flex">
  <div class="row" style="margin-left: 2%;">
  
    <div id="accordion"  class="col-xl-8 col-lg-8 col-md-11 col-sm-11 col-11">
        <div class="card" id="active" >
          <div class="card-header" id="headingOne" style="background-color: rgb(236, 104, 15);">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none; color :white; "><i class="fa fa-plus"></i>
              LOGIN INFORMATION
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
             <a id="" class="login" style="display: block; width: 100px; height: 30px; background-color: orangered; text-align: center; color:white; "  data-toggle="modal" data-target="#loginModalCenter"> Login</a>
             
             <a class="usern" style="color:black;">
               
            </a>
            </div>
            
          </div>
        </div>
        <!--DELIVERY ADDRESS-->
        <div class="card">
          <div class="card-header" id="headingTwo" style="background-color: rgb(236, 104, 15);">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration: none; color:white"><i class="fa fa-plus"></i>
                 DELIVERY ADDRESS
              </button>
            </h5>
            
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
             
              <div class="container " style="background-color: rgba(224, 220, 220, 0.822);">
                <br>
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
                    <input type="text" class="txt name"  placeholder="Name">
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
                    <input type="number" class="txt mobile" placeholder="10-Digit Mobile Number" maxlength="10">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
                    <input type="text" class="txt landmark" placeholder="Landmark">
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
                    <input type="text" class="txt locality" placeholder="Locality">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <textarea class="txt address" style="height: 80px;"  placeholder="Address (Area) "></textarea>

                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
                    <input type="text" class="txt state" placeholder="State">
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
                    <input type="text" class="txt city" placeholder="City/District">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
                    <input type="text" class="txt pincode" placeholder="PinCode">
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
                    <input type="number" class="txt altmobile" placeholder="Alterante Phone Number" maxlength="10"  >
                  </div>
                </div><br>
                <div class="row">
                  <div>
                    <a href="#" style="text-decoration: none; width:250px; background-color: orangered; color:white; height:40px; display: block;text-align: center;" id="addsave">
                      <span style="padding-top:5px; display:block;">Save and deliver here</span>
                    </a>
                  </div>
                  <br>
                  &nbsp;
                </div>
            </div><!-- end of container-->
            
            </div>
          </div>
        </div>
        
        <!--PAYMENT OPTION-->
        <div class="card">
          <div class="card-header" id="headingThree" style="background-color: rgb(236, 104, 15);">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"  style="text-decoration: none; color: white;">
                <i class="fa fa-plus"></i> PAYMENT OPTION
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
            
             <div class="row">
              <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12">  
              <div style="color:red; font-size:20px;"> Total Amount Payable: Rs <?php echo $tpay;//including shipping charges?>
              </div>
              </div>
              </div>

              <div class="row">
              <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12">  
              <div style="color:grey; font-size:16px;"> Payment mode are secure and safe,
<br>
               <strong> Note: </strong>Go Cashless and Pay Online via Google Pay, Phone Pay or Bhim UPI and become a part of Cashless Society
                </div>
              </div>
              </div>

              <div class="row">
              <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12">  
              <div class="qrcode" style="text-align:center">
                <img src="payqrcode/qrcode.png" alt="Qrcode"  width="50%" height="50%;">

              </div>
              </div>
              </div>

              <div class="row">
                <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12">
                  <div class="ml-5">
                   <strong> Transaction Id</strong>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12">
                  <div class="ml-5">
                    <input type="text" class="refno" id="trid" placeholder="Transaction ID" style="width:80%;">
                  </div>

                </div>
              </div>
<br>
              <div class="row">
                <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12">
                  <div class="ml-5" style="float:right;">
                  <a href="#" style="text-decoration: none; width:250px; background-color: orangered; color:white; height:40px; display: block;text-align: center;" id="submit">
                      <span style="padding-top:5px; display:block;">Submit</span>
                     
                    </a>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      
   
    <div class="cdet col-xl-3 col-lg-3 col-md-11 col-sm-11 col-11">
      <p>
        <h5>PRICE DETAILS</h5></p>
      <hr  style="  border-top: 1px solid red;">
      <p>
        Price(<?php echo $titem; ?> items) <span class=" mr-4 "style="float: right;"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $tprice;?></span>
       </p>
            <p>
            Shipping Charges <span class=" mr-4"style="float: right;" ><i class="fa fa-inr " aria-hidden="true"></i> <?php echo $scharge; ?></span>
            </p>
            <hr style="  border-top: 1px dashed red;">
            <p>
              <strong> <h5>Total Payable <span class=" mr-4"style="float: right;"> <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $tpay; ?></span></h5>
                </strong>
            </p>
            <hr  style="  border-top: 1px solid red;">
            <br>
              <p style="color:green">
                Your Total Saving on this order  <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $tsaving;?>
              </p>
      </div>
  </div>
    </div>
    <?php include "footer.php";?>

    <?php 
    $sql1="select * from useraddress where user_id='$uid'";
    $result1=mysqli_query($con,$sql1);
    if($row1=mysqli_fetch_array($result1))
    {
      ?>
          <script>
          $(".name").val("<?php echo $row1[1]; ?>");
          $(".mobile").val("<?php echo $row1[2]; ?>");
          $(".landmark").val("<?php echo $row1[3]; ?>");
          $(".locality").val("<?php echo $row1[4]; ?>");
         //$(".address").text("<?php //echo $row1[5]; ?>");
          $(".state").val("<?php echo $row1[6]; ?>");
          $(".city").val("<?php echo $row1[7]; ?>");
          $(".pincode").val("<?php echo $row1[8]; ?>");
          $(".altmobile").val("<?php echo $row1[9]; ?>");
          </script>
      <?php
    }
    ?>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     
     <script>
         /*enable manually */
         $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
          </script>
          <script>
          var c=0;
          $(document).ready(function(){

            $("#addsave").click(function()
            { 
              if($(".name").val()=="")
              { $(".name").css('border-color','red');
              }
              else if($(".mobile").val()=="")
              { $(".mobile").css('border-color','red');
                
              }
              else if($(".landmark").val()=="")
              {
                $(".landmark").css('border-color','red'); 
              }
              else if($(".locality").val()=="")
              { $(".locality").css('border-color','red');
              }
              else if($(".address").val()=="")
              { $(".address").css('border-color','red');
              }
              else if($(".state").val()=="")
              { $(".state").css('border-color','red');
              }
              else if($(".city").val()=="")
              {
                $(".city").css('border-color','red');
              }
               else if($(".pincode").val()=="")
              {
                $(".pincode").css('border-color','red');
              }
              else if(parseInt(($(".mobile").val()).length)!=10)
              {
                alert("Invalid Mobile Number");
              }
              
              else{
                c=1;
               var uid=<?php echo  $uid ?>;
               var name=$(".name").val();
               var mob=$(".mobile").val();
               var landmark=$(".landmark").val();
               var loc=$(".locality").val();
               var add=$(".address").val();
               var city=$(".city").val();
               var state=$(".state").val();
               var pin=$(".pincode").val();
               var altmob=$(".altmobile").val();
                $.ajax({
                  url:"useraddphp.php",
                  type:"POST",
                  data:{name:name,mob:mob,landmark:landmark,loc:loc,add:add,city:city,state:state,pin:pin,altmob:altmob},
                  success:function(data)
                  {
                   // alert(data);
              $("#collapseThree").toggle();
              $('html, body').animate({scrollTop: $("#collapseThree").offset().top}, 1000);
                  }
                });
                //show after all required field are 
              }
            });

            $("#submit").click(function()
            {
              if(($("#trid").val()=="")||c==0)
              {
                alert("Please fill all fields.....")
              }
              else
              {
                var trid=$("#trid").val();
                
               
                <?php 
                if($p=="cart")
                {
                ?>
                //alert("cart");
                $.ajax({
                  url:"finalsubmitphp.php",
                  type:"POSt",
                  data:{pcode:"cart",trid:trid},
                  success:function(data)
                  {
                    alert(data);
                    window.location.href="index.php";
                  }
                });
               <?php
                }
                else{
                  ?>
                  //alert("other");
                  $.ajax({
                  url:"finalsubmitphp.php",
                  type:"POSt",
                  data:{pcode:"<?php echo $p;?>",qty:"<?php echo $q;?>",trid:trid},
                  success:function(data)
                  {
                    alert(data);
                    window.location.href="index.php";
                  }
                });
               <?php
                }
                ?>
              }
            });
          });
          </script>
</body>
</html>