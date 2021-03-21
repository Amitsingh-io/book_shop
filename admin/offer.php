<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Offer</title>
    <link rel = "icon" href ="/books_shop/logo/brand.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        
      @media screen and  (max-width:575px)
      {
        /*.container{
          padding-top:120px;
          padding-right: 60px;
        }*/
        .col-sp-sm
        {
          margin-top: 20px;
        }
        
        .isize{
          width: 80%;
        }
        
        
      }
     
      @media screen and (min-width:576px) and (max-width: 767px) {/*small 60*/
         /* .container 
          { padding-top: 120px;
            padding-left:60px; }  */
          .col-space
        {
          margin-top: 20px;
        }
        .isize{
              width:70%;
            
          }
          .col-sp-sm
          {
            margin-top: 20px;
          }
        
      }
      @media screen and (min-width:768px) and (max-width: 991px) {
          /*.container { padding-top: 130px; } */ /*med 110*/
          /* input size*/
          .isize
      {
        width:160px;
        margin-right: 10px;
      }
      .col-space
        {
          margin-top: 20px;
        }
      
      }
      @media screen and (min-width: 992px) {
        /* .container
           { padding-top: 140px;
              padding-left:150px; 
           }*/
            .isize{
              width:250px;
            
          }
          
        @media screen and (min-width: 992px) and (max-width:1199px ){
          
        }
        /*large 60*/
      }
    </style>
</head>
<body>

<?php
     include 'connection.php';
     $sql="select cat_type from category";
    $result=mysqli_query($con, $sql);
    //$row=mysqli_fetch_array($result);
    
    include 'adminheader.php';
  ?>

<div class="container">
        <h3>
          Product Offer 
        </h3>
        <!--<form id="fupForm" action="" method="post"  enctype="multipart/form-data" >-->
        <div>
        <hr style="  border-top: 1px solid red;">
        <div class="row" style="margin-top: 25px;">
          <div class="col-lg-2 col-md-2 col-sm-3 col-12 ">Product Code</div>
      <div class="col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="pcode isize" name="pcode" required placeholder="Product code"></div>
      <div class="col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">Product Name</div>
      <div class="col-lg-4 col-md-4 col-sm-3 col-12"> 
        <!--<input type="text" class="pname isize" name="pname" required placeholder="Product Name">-->
        <select class="pname isize" name="pname" required placeholder="Category Type">
        <option>--Select-- </option>
                  <?php 
                  $sql="select P_name from bookshop_master";
                  $result=mysqli_query($con, $sql);
                 while($row=mysqli_fetch_array($result)) {
                  echo "<option>". $row[0]."</option>";
                }
                mysqli_close($con);
                  ?>
        
    </select>
      </div>
        </div>

        <br>
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10 col-12">
            <button style="left:50%; position: absolute;"id="con" class="con" >
              &nbsp;&nbsp;Continue &nbsp;&nbsp;
            </button>
          </div>
        </div>
        <br>
        <hr style="  border-top: 1px solid red;">

        <div class="row" style="margin-top: 25px;">
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-12 ">Current Offer %</div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="coff isize" name="coff"  placeholder="Current Offer" style="cursor: not-allowed;"></div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">New Offer %</div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="noff isize" name="noff" required placeholder="New Offer"></div>
                </div>
        <br>
        <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-12">
      <button style="left:50%; position: absolute;"id="updateoffer" class="updateoffer" >
        &nbsp;&nbsp;Set Offer &nbsp;&nbsp;
      </button>
    </div>
  </div>
</div>
</div><!--container div-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
  $("#con").click(function(e)
  {var pcode=$(".pcode").val();
  //alert(pcode);
e.preventDefault();
$.ajax({
type:'POST',
url:'offerphp.php',
dataType:"json",
data:{pcode:pcode,val:'1'},
success:function(data)
{
  if(data=="1")
  {
    alert("Invalid Product Code...");
  }
  else{
    $(".pname").val(data[0]);
    $(".coff").val(data[1]);

  }
}
});

  });

  $(".pname").change(function(e)
  {
    var pname=$(".pname").val();
    var index=$(".pname option:selected").index();
    if(index==0)
    {
      alert("Invalid Selection.....")
          $(".pcode").val("");
          $(".noff").val("");
          $(".coff").val("");
    }

    else{
$.ajax({
  type:'POST',
  url:'offerphp.php',
  dataType:"json",
  data:{pname:pname,val:'2'},
  success:function(data)
  {
   if(data=="1")
   {
     alert("Invalid Product Code");
    
   }
   else
   {
    $(".pcode").val(data[0]);
     
      $(".coff").val(data[1]);
   }
  }
});
}
  });

  $("#updateoffer").click(function(e)
  {
    e.preventDefault();
  var pcode=$(".pcode").val();
  var noff=$(".noff").val();
  
  if(parseInt(noff)<0||noff=="")
  {
    alert("Please input offer.....");
  }
  else{
    $.ajax({
      type:'POST',
      url:'offerphp.php',
      data:{
          pcode:pcode,noff:noff,val:'3'
      },
      success:function(data)
      {
        //alert(data);
        if(data=='0')
        {
          alert("Offer Set Successfully....");
          $(".pcode").val("");
          $(".pname").val("");
          $(".coff").val("");
          $(".noff").val("");
        }
        
        else
        {
          alert(data);
        }
      }
    });
  }

  });
  </script>
</body>
</html>