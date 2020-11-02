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
      #upimg
      { 
        height:150px;
        width:150px;
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
    
    //$row=mysqli_fetch_array($result);

  ?>
  <br>
<div class="container"><!--container 1-->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="adminindex.php" role="tab" aria-controls="home" aria-selected="true">Add New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="false">Edit Existing </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="stockin.php" role="tab" aria-controls="contact" aria-selected="false">New Stock</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="stockout.php" role="tab" aria-controls="contact" aria-selected="false">Stock Out</a>
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
    <div class="container">
    <h3>
      Edit Existing Product
    </h3>
    <form id="fupForm" action="" method="post"  enctype="multipart/form-data" >
          <hr style="  border-top: 1px solid red;">
          <div class="row" style="margin-top: 25px;">
            <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Product Code</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" class="pcode isize" name="pcode" required placeholder="Product code"></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 col-sp-sm">Product Name</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12">
          <!-- <input type="text" class="pname isize" name="pname" required placeholder="Product Name">-->
      
        <select class="pname isize" name="pname" required placeholder="Category Type">
        <option>--Select-- </option>
                  <?php 
                  $sql="select P_name from bookshop_master";
                  $result=mysqli_query($con, $sql);
                 while($row=mysqli_fetch_array($result)) {
                  echo "<option>". $row[0]."</option>";
                }
                  ?>
        
    </select>
      </div>
        </div>
        
        <br>
        
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10 col-12">
            <button style="left:50%; position: absolute;"id="ok" class="ok" >
              &nbsp;&nbsp; Edit &nbsp;&nbsp;
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
            <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Publication</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" class="ppub isize" name="ppub" required placeholder="Publication"></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 col-sp-sm">Author Name</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12 "> <input type="text" class="pauthor isize" name="pauthor" required placeholder="Author Name"></div>
        </div>

        <div class="row" style="margin-top: 25px;">
          <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">ISBN</div>
          <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" class="pisbn isize" name="pisbn" required placeholder="ISBN"></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 col-sp-sm">Edition</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12 " > <input type="text" class="pedi isize" name="pedi" required placeholder="Edition"></div>
        </div>

        <div class="row" style="margin-top: 25px;">
           
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 col-sp-sm">Year</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12 "> <input type="text" class="pyear isize" name="pyear" required placeholder="Year"></div>
        
            <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Month</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" class="pmonth isize" name="pmonth" required placeholder="Month"></div>
        </div>

        
        <div class="row" style="margin-top: 25px;">
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 col-sp-sm">Binding Type</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12 "> <input type="text" class="pbind isize" name="pbind" required placeholder="Binding Type"></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 col-sp-sm">Category Type</div>
        <!--change get cat type from category table-->
        <div class="col-lg-4 col-md-3 col-sm-3 col-12 "> 
        <select class="pcate isize" name="pcate" required placeholder="Category Type">
        <option>--Select-- </option>
                  <?php 
                  $sql="select cat_type from category";
                  $result=mysqli_query($con, $sql);
                 while($row=mysqli_fetch_array($result)) {
                  echo "<option>". $row[0]."</option>";
                }
                mysqli_close($con);
                  ?>
        
    </select>
        </div>
        </div>
        

        <div class="row" style="margin-top: 25px;">
            <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Subject</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" class="psub isize" name="psub"  placeholder="Subject"></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 col-sp-sm">Class</div> 
        <div class="col-lg-4 col-md-3 col-sm-3 col-12 "> <input type="text" class="pclass isize" name="pclass"  placeholder="Class"></div>
        </div>

        <div class="row" style="margin-top: 25px;">
            <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Price</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" class="pprice isize" name="pprice" required placeholder="Price"></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Currnet Stock</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" readonly class="cstock isize" name="cstock" required placeholder=" Current Stock" value="0" style="cursor: not-allowed;"></div>
        </div>

        <!--<div class="row" style="margin-top: 25px;">
          
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">Stock In</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="number"  class="istock isize" name="istock"   value='0'></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">New Stock</div>
        <div class="col-lg-4 col-md-3 col-sm-3 col-12"> <input type="text" readonly class="nstock isize" name="nstock" required placeholder="New Stock" style="cursor: not-allowed;"></div>
       </div>-->

       <div class="row" style="margin-top:25px;">
       
      </div>
       <!---upload image section-->
       <div class="row">
        <br>
       <div class="col-lg-2 col-md-3 col-sm-6 col-12">

         <button class="file-upload-btn col-sp-sm" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Image </button><span style="color:red; font-size:20px;"> &nbsp; *</span>
        
         <div class="image-upload-wrap" style="display: none;">
         <input class="file-upload-input" type="file"  onchange="readURL(this);" required accept="image/*"  name="file"/>
       </div>

       </div>
       <div class="col-lg-4 col-md-3 col-sm-6 col-6"> 

         <div class="file-upload-content">
           <img class="file-upload-image" src="#" alt="your image"/>
           <div class="image-title-wrap">
             <button class="remove-image"> <span class="image-title">Uploaded Image</span></button>
           </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-3 col-sm-6 col-6">
       <span><h4>Uploaded Image </h4></span>
       </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="uploadedimg">

              </div>
              </div>
     </div>
<!--END OF UPDATE IMAGE-->
<div class="row" style="margin-top: 25px;">
  <div class="col-lg-6 col-md-6 col-sm-10 col-10 p-3" style="text-align: right;">   
    <button type="submit" name="submit" class="btn btn-primary mr-5 " id="upload">Edit Record</button>
</div>  
</div>
    </form>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(".istock").keyup(function(e)
{ 
  var cstock=$(".cstock").val();
  var stock= $(".istock").val(); 
  
  var nstock=parseInt(cstock)+parseInt(stock);
  if(stock<1)
  {
    $(".nstock").val(cstock);
  }
  else
  {
    $(".nstock").val(nstock);
 }
});
</script>
<script>
//upload image js
function readURL(input) {
        if (input.files && input.files[0]) {
      
          var reader = new FileReader();
      
          reader.onload = function(e) {
            $('.image-upload-wrap').hide();
      
            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();
      
            $('.image-title').html(input.files[0].name);
          };
      
          reader.readAsDataURL(input.files[0]);
      
        } else {
          //removeUpload();
        }
      }
</script>
<script>
    $(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'editcomphp.php',
            data: new FormData(this),
            //dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){
                alert(response); 
               //console.log(response);
               
            }
        });
    });
});
</script>
<script>
  $("#ok").click(function(e)
  {
    e.preventDefault();
    var pcode= $(".pcode").val();
    //alert(pcode);
    
      $.ajax({
        type:'POST',
        url:'editphp.php',
        dataType:"json",
        data:{pcode:pcode,val:'1'},
        success:function(data)
        {
         if(data=="1")
         {
           alert("Invalid Product Code");
           $(".pauthor").val("");
           $(".ppub").val("");
           $(".plang").val("")
          $(".pedi").val("");
          $(".pisbn").val("");
          $(".pyear").val("");
          $(".pmonth").val("");
          $(".pbind").val("");
          $(".psub").val("");
          $(".pclass").val("");
          $(".pprice").val("");
          $(".pcate").val("");
          $(".cstock").val("");
          img = $('<img />', { 
  id: 'upimg',
  src: '',
  alt: 'Uploaded Image'
});
img.appendTo($('#upimg'));
         }

         else
         {
           
           $(".ppub").val(data[2]);
           $(".pauthor").val(data[3]);
           $(".plang").val(data[4]);
          $(".pedi").val(data[5]);
          $(".pisbn").val(data[6]);
          $(".pyear").val(data[7]);
          $(".pmonth").val(data[8]);
          $(".pbind").val(data[9]);
          $(".psub").val(data[10]);
          $(".pclass").val(data[11]);
          $(".pprice").val(data[12]);
          $(".pcate").val(data[14]);
          $(".cstock").val(data[15]);
         // $(".nstock").val(data[15]);
          $(".pname").val(data[1]);

          img = $('<img />', { 
  id: 'upimg',
  src: 'productimage/'+data[13],
  alt: 'Uploaded Image'
});
img.appendTo($('.uploadedimg'));
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
      $(".ppub").val("");
      $(".pauthor").val("");
           $(".plang").val("")
          $(".pedi").val("");
          $(".pisbn").val("");
          $(".pyear").val("");
          $(".pmonth").val("");
          $(".pbind").val("");
          $(".psub").val("");
          $(".pclass").val("");
          $(".pprice").val("");
          $(".pcate").val("");
          $(".cstock").val("");
    }
    else{

      $.ajax({
        type:'POST',
        url:'editphp.php',
        dataType:"json",
        data:{pname:pname,val:'2'},
        success:function(data)
        {
         if(data=="1")
         {
           alert("Invalid Product Code");
          
         }
         else
         {$(".pcode").val(data[0]);
           $(".ppub").val(data[2]);
           $(".pauthor").val(data[3])
           $(".plang").val(data[4])
          $(".pedi").val(data[5]);
          $(".pisbn").val(data[6]);
          $(".pyear").val(data[7]);
          $(".pmonth").val(data[8]);
          $(".pbind").val(data[9]);
          $(".psub").val(data[10]);
          $(".pclass").val(data[11]);
          $(".pprice").val(data[12]);
          $(".pcate").val(data[14]);
          $(".cstock").val(data[15]);
          //$(".nstock").val(data[15]);

          img = $('<img />', { 
  id: 'upimg',
  src: 'productimage/'+data[13],
  alt: 'Uploaded Image'
});
img.appendTo($('.uploadedimg'));
         }
        }
        
      });
    }
  });
  
  </script>
</body>
</html>