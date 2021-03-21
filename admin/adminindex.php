<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel = "icon" href ="/books_shop/logo/brand.png" type = "image/x-icon"> 
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
     include 'connection.php';
     $sql="select cat_type from category";
    $result=mysqli_query($con, $sql);
    //$row=mysqli_fetch_array($result);
    
    include 'adminheader.php';
  ?>
   
    <div class="container">
      <h3>New Product</h3>
     
                <br>&nbsp;<br>
               <form id="fupForm" action="" method="post"  enctype="multipart/form-data" >
                <div class="row" style="margin-top: 25px;">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-12 ">Product Code</div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="pcode isize" name="pcode"  placeholder="Product code" readonly style="cursor: not-allowed;"></div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">Product Name</div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="pname isize" name="pname" required placeholder="Product Name"></div>
                </div>

                <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12 ">Publication</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="ppub isize" name="ppub"  placeholder="Publication"></div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">Author Name</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12 "> <input type="text" class="pauthor isize" name="pauthor"  placeholder="Author Name"></div>
                </div>

                <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12 ">Language</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12"> 
                  <select type="text" class="plang isize" name="plang" required placeholder="Language">
                    <option>Hindi</option>
                    <option>Bhojpuri</option>
                    <option>English</option>
                    <option>Sanskrit</option>
                    
                  </select>
                  </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">Edition</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12 " > <input type="text" class="pedi isize" name="pedi" required placeholder="Edition"></div>
                </div>

                <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12 ">ISBN</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="pisbn isize" name="pisbn" placeholder="ISBN"></div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">Year</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12 "> <input type="text" class="pyear isize" name="pyear"  placeholder="Year"></div>
                </div>

                
                <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12 ">Month</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12"> 
               <select type="text" class="pmonth isize" name="pmonth" placeholder="Month">
                <option> January </option>
                <option> February </option>
                <option> March </option>
                <option> April </option>
                <option> May </option>
                <option> June </option>
                <option> July </option>
                <option> August</option>
                <option> September </option>
                <option> October </option>
                <option> November </option>
                <option> December </option>
               </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">Binding Type</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12 "> <input type="text" class="pbind isize" name="pbind"  placeholder="Binding Type"></div>
                </div>
                

                <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12 ">Subject</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="psub isize" name="psub" placeholder="Subject"></div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">Class</div> 
                <div class="col-lg-4 col-md-4 col-sm-3 col-12 "> <input type="text" class="pclass isize" name="pclass" placeholder="Class"></div>
                </div>

                <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12 ">Price</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="pprice isize" name="pprice" required placeholder="Price"></div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">Category Type</div>
                <!--change get cat type from category table-->
                <div class="col-lg-4 col-md-4 col-sm-3 col-12 "> 
                  <select type="text" class="pcate isize" name="pcate" required placeholder="Category Type">
                <option>--Select-- </option>
                  <?php 
                 while($row=mysqli_fetch_array($result)) {
                  echo "<option>". $row[0]."</option>";
                }
                  ?>
                </select>
                </div>
                </div>

                <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12 ">Stock In</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="istock isize" name="istock" required placeholder="Stock"></div>     
               </div>

               <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12 ">Rack</div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-12"> <input type="text" class="prack isize" name="prack" placeholder="Rack"></div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-12 col-sp-sm">Row</div> 
                <div class="col-lg-4 col-md-4 col-sm-3 col-12 "> <input type="text" class="prow isize" name="prow" placeholder="Row"></div>
                </div>

               <!---upload image section-->
               <div class="row">
                 <br>
                <div class="col-lg-2 col-md-2 col-sm-6 col-12">
  
                  <button class="file-upload-btn col-sp-sm" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Image<span id="star"></span></button>
    
                  <div class="image-upload-wrap" style="display: none;">
                  <input class="file-upload-input" type="file"  onchange="readURL(this);"  accept="image/*"  name="file"/>
                </div>
  
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6"> 
  
                  <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image" />
                    <div class="image-title-wrap">
                      <button class="remove-image"> <span class="image-title">Uploaded Image</span></button>
                    </div>
                  </div>
                </div>
              </div>
<!--END OF UPDATE IMAGE-->

            <div class="row" style="margin-top: 25px;">
                <div class="col-lg-6 col-md-6 col-sm-10 col-10 p-3" style="text-align: right;">   
                  <button type="submit" name="submit" class="btn btn-primary mr-5 " id="upload">Update Record</button>
              </div>  
            </div>
            </form>
       
      
      
<!--edit section-->
        
<!--end of edit section-->

        <!--stock in -->
        
        <!--end of stock in-->

     
      </div><!--end of container--> 

    
    <?php mysqli_close($con);?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      
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
      /*
      function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        //$('.image-upload-wrap').show();
        
      }
      $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
          $('.image-upload-wrap').removeClass('image-dropping');
      });*/
      //upload image
          //end of upload image js
        
      </script>
      <script>
        $(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'newproductphp.php',
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
</body>
</html>