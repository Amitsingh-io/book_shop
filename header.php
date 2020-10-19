<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>


<!--Jquery-->
<!--
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
-->
<body>
<div class="nav ">
    <div class="brand-logo">
    <a href="#">
      <img src="logo/brand.png" alt="Mohan Books">
    </a>
  </div>
  <div class="col-lg-6 " style="background-color: re;">
  <form class="search-group">
    <input type="text" class="search" placeholder="Search">
    <button type="button" class="b-search" Value="Search">Search
     </button>
  </form>
</div>
<div class="login" id="userlogin">
  <a href="#"  data-toggle="modal" data-target="#loginModalCenter">
     <h5 style="color:white;"><i class="fas fa-sign-in-alt" ></i>&nbsp;Login&nbsp;</h5>
  </a>
  </div>
  <div class="login" id="logout" style="display:none;">
  <a href="#"  data-toggle="modal" data-target="">
     <h5  style="color:white;"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout&nbsp;</h5>
  </a>
  </div>
 <span class="user" > <i class="fa fa-user" aria-hidden="true"></i> <strong id="username" style="font-size:18px;">User</strong></span>

  <span class="cart" style="margin-left:2%;"> <h5 style="color:white;"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</h5>
  </span>
  <!--cart value-->
  <div class="cart-val" value="0">

  </div>
  <span class="cart" style="margin-left:2%;"> <h5 style="color:white;">Admin</h5>
  </span>
</div>

<!--login modal-->
<!-- user login Modal -->
<div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-top" role="document" >
<div class="modal-content" style="border-color:rgb(16, 31, 233)">
<div class="modal-header" style="background-color:white;">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <!--tab -->
    <li class="nav-item" style="background: white;">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" >Login</a>
    </li>
    <li class="nav-item" style="background: white;">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sign Up</a>
    </li>
    

    
  </ul>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <!--<form action="login.php" method="POST">-->
    <div class="form-group">
      <input type="hidden" name="login" value="userlogin">
      <!--tab-->
     
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <!--login Content\/-->
          <label for="exampleInputEmail1">Mobile Number</label>
      <input type="email" required class="form-control" id="lemail"  aria-describedby="emailHelp" placeholder="Enter Mobile No." name="lemail">
      <div class="form-group">
        <label for="exampleInputPassword1" >Password</label>
        <input type="password" required class="form-control" id="lpassword"placeholder="Password" name="lpassword">
        <div style="margin-left:70%;"><a href="#" >Forgot password?</a></div>
      </div>
      
      <button type="submit" class="btn btn-primary" id="login">Login

      </button>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <!--sign UP content \/-->  
        <div class="form-group">
          <!--<input type="hidden" name="login" value="signup">-->
          <label for="InputName">Name</label><span style="color: red;"> *</span> 
          <input type="text" required class="form-control" id="name" placeholder="Name" name="sname">
          <small id="check1" style="color: red;" type="hidden" > Please enter Name </small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label><!--<span style="color: red;"> *</span>-->
          <input type="email"  class="form-control" id="email"  aria-describedby="emailHelp" placeholder="Enter email (Optional)" name="semail">
         <!-- <small id="check2" style="color: red;" type="hidden">We'll never share your email with anyone else. Please Enter valid Email</small>-->
          
        </div>
        <div class="form-group">
          <label for="phonenumber" >Mobile Number</label><span style="color: red;"> *</span>
          <input type="number" required class="form-control" id="contact" placeholder="Enter Mobile No." name="sphone">
          <small id="check3" style="color: red;" type="hidden"> Please Enter valid Contact No.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" >Create Password</label><span style="color: red;"> *</span>
          <input type="password" required class="form-control" id="password" placeholder="Password" name="spassword">
          <small id="check4" style="color: red;"type="hidden" > Please Enter Password</small>
        </div>
        <!--cnf password-->
        <div class="form-group">
          <label for="exampleInputPassword1" >Confirm Password</label><span style="color: red;"> *</span>
          <input type="password" required class="form-control" id="conpassword" placeholder="Password" name="spassword">
          <small id="check5" style="color: red;"type="hidden" > Please Enter Correct Password</small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="signup">Signup</button>
        </div>
        </div>
        <!--end of signup-->
        <!--admin login tab-->
        
      </div>
    </div>
  </div>
</div>
 </div>
 </div>
 <!--end of modal and modal content/\-->
 <!--categories-->
 <!-- &#9779 for = menu bar-->
 <br>
 <span style="font-size:18px;cursor:pointer ;margin-left:25px;" onclick="openNav()"class="category">&#9776; &nbsp;Categories</span>
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"> <i class="fa fa-book" aria-hidden="true"></i> &nbsp;Text Books</a>
  <a href="#"><i class="fa fa-university" aria-hidden="true"></i> &nbsp;Exam Corner</a>
  <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp;Literature and Fiction</a>
  <a href="#"><i class="fa fa-child" aria-hidden="true"></i>&nbsp;&nbsp; Children Books</a>
  <a href="#"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp; Biographies and Autobiographies</a>
  <a href="#"><i class="fa fa-camera-retro" aria-hidden="true"></i> &nbsp;Film and Photography </a>
  <a href="#"><i class="fas fa-door-open"></i> Cooking and Hospitality</a>
  <a href="#"><i class="fas fa-dharmachakra"></i> &nbsp;Religion</a>
  <a href="#"><i class="fas fa-plane"></i> Travelling and Wildlife</a>
  <a href="#"><i class="fa fa-futbol-o" aria-hidden="true"></i>&nbsp; Sports</a>
  <a href="#"><i class="fas fa-dumbbell" aria-hidden="true"></i> Yoga and Fitness</a>
  <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Map and Atlas</a>
  <a href="#"><i class="fas fa-shield-alt" aria-hidden="true"></i> &nbsp;Defense and Security</a>
  <a href="#"><i class="fa fa-gavel" aria-hidden="true"></i>&nbsp; Law & References</a>
</div>
</body>

<!--dd-->
 <!--end of categories-->

 <!--sidebar javascript-->
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "auto";
    }
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
    <!--end sidebar js-->
    <script src="jquery-3.5.1.min.js"></script>
  <script>
   $(document).ready(function(){
        var n1=1,e1=0,c1=1,p1=1,cp1=0;
        $('#check1, #check2, #check3, #check4, #check5').hide();//by default hide
        //hide when input value
        $("#name").keydown(function()
       { n1=1; 
         $("#check1").hide();
        
       });
       /*$("#email").keydown(function()
       { e1=0; 
         $("#check2").hide();
  
       });*/
       $("#contact").keydown(function()
       { c1=1; 
         $("#check3").hide();
  
       });
       $("#password").keydown(function()
       { p1=1;cp1=0;
          $("#check4").hide();
       });
       $("#conpassword").keydown(function()
       {
        $("#check5").hide();
       });
      $("#signup").on("click",function(e)
       {  
        //alert("User Already Registered go for login");
       var name=$("#name").val();
       var email=$("#email").val();
       var contact=$("#contact").val();
       var password=$("#password").val();
       var conpassword=$("#conpassword").val();
        //alert(password.length);
       if(name=="")
       {n1=0;
        $("#check1").show();
       }
       /*if(email.includes("@")&&email.includes("."))
       {e1=1;
        //$("#check2").show();
       }
       else
       {
        $("#check2").show();
       }*/
       if(contact.length!=10)
       {c1=0;
        $("#check3").show();
       }
       if(password=="")
       {p1=0;
        $("#check4").show();
       }
      /* if(p1==1)
       {
         if(password.length<4)
         {
           cp1=0;
           $("#check4").show();
           $("#check4").html("Please Enter Minimun 4 Charactor Password");
         }
         else if(conpassword===password)
         {
           cp1=1;
         }
         else{
          
         }
       }*/
       if((conpassword===password)&&(password.length>3))
       {
        cp1=1;
       }
       else{
        $("#check4").show();
           $("#check4").html("Please Enter Minimun 4 Charactor Password")
           $("#check5").show();
           $("#check5").html("Confirm Password should be same as Create Password")
       }
        e.preventDefault();
       //if(n1==1 && e1==1 && c1==1 && cp1==1)//email is optional
       if(n1==1 && c1==1 && cp1==1)
       {
      
            $.ajax({
            url:"login.php",
            type:"POST",
            data:{name:name, userid:contact,email:email,password:password,check:'0'},
            
            //check for check login or signup
            //1 for login 0 for signup 2 for logout for check cookies
            //dataType:"JSON",
            
            success:function(data)
                { //
                  if(data=='0')
                  {
                    alert("User Is Registered...\nPlease Login");
                  }
                  else
                  {
                     //
                  $("#loginModalCenter").modal("hide");
                  $('.modal-backdrop').hide();
                  //$("#verifyotp").modal({backdrop:'static'});
                  $(".login").css("display","none");//to hide login
                $("#logout").css("display","block");// to show logout
                
               
                $(".usern").text(data);
                $(".usern").show();
                var
                 firstname = data.split(" ")[0];
                $("#username").text(firstname);
                // to display user name
                  }
                }
            });
       }
       
       });
  
       $("#login").click(function(e)
       {
        //alert("click on login");
        e.preventDefault();
        var lemail=$("#lemail").val();
        var lpassword=$("#lpassword").val();
        $.ajax(
            { 
              url:"login.php",
              type:"post",
              data:{userid:lemail,lpassword:lpassword,check:'1'},
            //check for check login or signup
            //1 for login 0 for signup 2 for logout for check cookies
              success:function(data)
              {
                //alert(data);
                if(data=='0')
                {
                 alert("wrong user id or password");
                }
                else //if(data=='1')
                {
                  //
                  $("#loginModalCenter").modal("hide");
                  $('.modal-backdrop').hide();
                  //$("#verifyotp").modal({backdrop:'static'});
                  $(".login").css("display","none");//to hide login
                $("#logout").css("display","block");// to show logout
                $(".usern").show();
                $(".usern").text(data);

                var firstname = data.split(" ")[0];
                $("#username").text(firstname);
               // to display user name
                
                }
            }
          }
        );
       });
  //logout
  $("#logout").click(function(e)
  {e.preventDefault();
    alert("logout");
    $.ajax(
           { url:"login.php",
            type:"post",
            data:{check:'2'},//2 for logout 3 for check cookies
            success:function(data)
            {
                $(".login").css("display","block");//to show login
                $("#logout").css("display","none");// to hide logout
                
                $("#username").text("User");// to display user name
                $(".usern").hide();
            }
           }
    );

    
  });
  //to check cookies is avaliable or not     
    $.ajax(
        {
            url:"login.php",
            type:"post",
            data:{check:'3'},
            success:function(data)
            {
                //alert(data);
                if(data=='1')
                {
                    $(".login").css("display","block");//to show login
                $("#logout").css("display","none");// to hide logout
                
                $("#username").text("User");// to display user name
                }
                else{
                    $("#loginModalCenter").modal("hide");
                  //$("#verifyotp").modal({backdrop:'static'});
                  $(".login").css("display","none");//to hide login
                $("#logout").css("display","block");// to show logout
              $(".usern").text(data);
               var firstname = data.split(" ")[0];
                $("#username").text(firstname);// to display user name
                
                }
            }
        }
    );
      });
    </script>
 