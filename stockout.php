<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!--upload image css link-->
    <link rel="stylesheet" href="admincss/upload_img_css.css">

 
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
    $servername="localhost";
    $username="root";
    $pass="";
    $con=mysqli_Connect($servername,$username,$pass)or die("There is some problem in mysql connection");
    $db="book_shop";
    $sdb=mysqli_select_db($con,$db) or die("Problem in database connection");
    $sql="select cat_type from category";
    $result=mysqli_query($con, $sql);
    //$row=mysqli_fetch_array($result);

  ?>
    <br>
  <div class="container"><!--container 1-->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="adminindex.php" role="tab" aria-controls="home" aria-selected="true">Add New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="edit.php" role="tab" aria-controls="profile" aria-selected="false">Edit Existing </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="stockin.php" role="tab" aria-controls="contact" aria-selected="false">New Stock</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab" aria-controls="contact" aria-selected="false">Stock Out</a>
          </li>
          <li class="nav-item" style="float:right;">
          <a class="nav-link" id="adminlogout" data-toggle="tab" href="/books_shop/index.php" >
              Logout
            </a>
    </li>
          <li class="nav-item" style="float:right;">
             <a style="color:black;">Admin:-
               <?php
               echo $_COOKIE['admin_name'];
               ?>
             </a>
             
          </li>
      </ul>
      
      </div>



      <div class=" container">
          <h3>
              Stock Out
          </h3>
          <div>
        <hr style="  border-top: 1px solid red;">
        <div class="row" style="margin-top: 25px;">
          <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Product Code</div>
      <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" class="pcode isize" name="pcode" required placeholder="Product code"></div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-12 col-sp-sm">Product Name</div>
      <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <!--<input type="text" class="pname isize" name="pname" required placeholder="Product Name">
    -->

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
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Language</div>
          <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" class="plang isize" name="plang" required placeholder="Language"></div>
        </div>
      <div class="row" style="margin-top: 25px;">
        
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Currnet Stock</div>
    <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" readonly class="cstock isize" name="cstock" required placeholder=" Current Stock" style="cursor: not-allowed;"></div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Stock Out</div>
    <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="number"  class="ostock isize" name="ostock" required value="0"></div>
   </div>
   <div class="row" style="margin-top:25px;">
   
  
    <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">New Stock</div>
    <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" readonly class="nstock isize" name="nstock" required placeholder="New Stock" style="cursor: not-allowed;"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-12">
      <button style="left:50%; position: absolute;"id="updatestockout" class="updatestockout" >
        &nbsp;&nbsp;Update Stock &nbsp;&nbsp;
      </button>
    </div>
  </div>
              </div>
      </div> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
  
</script>

<script>
        $(".ostock").keyup(function(e)
{ 
var cstock=$(".cstock").val();
var stock= $(".ostock").val(); 

var nstock=parseInt(cstock)-parseInt(stock);
if(stock<1)
{
  $(".nstock").val(cstock);
}
else
{
  $(".nstock").val(nstock);
}
if(nstock<0)
{
  $(".ostock").val("0");
  $(".nstock").val(cstock);
    alert("Out of Stock...")

}
});
</script>

<script>
      $("#con").click(function(e)
  {   var pcode=$(".pcode").val();
     e.preventDefault();
      $.ajax({
        type:'POST',
        url:'stockoutphp.php',
        dataType:"json",
        data:{pcode:pcode,val:'1'},
        success:function(data)
        {
          if(data=="1")
          {
            alert("Invalid Product Code.....")
          }
          else
          {
            $(".pname").val(data[0]);
            $(".plang").val(data[1]);
            $(".cstock").val(data[2]);
            $(".nstock").val(data[2]);
          }
        }

      });
  });
      </script>

<script>
 $(".pname").change(function(e)
  {
    var pname=$(".pname").val();
    //alert(pname);
    var index= $(".pname option:selected").index();
    if(index==0)
    {
      alert("Invalid Selection.....")
          $(".pcode").val("");
          $(".plang").val("");
          $(".cstock").val("");
          $(".nstock").val("");
    }
    else{

      $.ajax({
        type:'POST',
        url:'stockoutphp.php',
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
            $(".plang").val(data[1]);
            $(".cstock").val(data[2]);
            $(".nstock").val(data[2]);
         }
        }
      });
    }
  });
        </script>

<script>
$("#updatestockout").click(function(e)
{
  e.preventDefault();
  var pcode=$(".pcode").val();
  var pname=$(".pname").val();
  var lang=$(".plang").val();
  var ostock=$(".ostock").val();
  var nstock=$(".nstock").val();

  if((parseInt(ostock)<1))
  {
    alert("Please Inter Stock.....")
  }
  else if(parseInt(ostock)>(parseInt($(".cstock").val())))
  {
    alert("Out Of Stock.....");
  }
  else{
    $.ajax({
      type:'POST',
      url:'stockoutphp.php',
      data:{
          pcode:pcode,pname:pname,lang:lang,ostock:ostock,nstock:nstock,val:'3'
      },
      success:function(data)
      {
        //alert(data);
        if(data==='0')
        {
          alert("Stock Update Successfully....");
          $(".pcode").val("");
          $(".pname").val("");
          $(".plang").val("");
          $(".cstock").val("");
          $(".ostock").val("");
          $(".nstock").val("");
        }
        else
        {
          alert(data);
        }
      }
    })
  }
});

          </script>

</body>
</html>