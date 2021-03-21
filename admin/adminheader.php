
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
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="stockout.php" role="tab" aria-controls="contact" aria-selected="false">Stock Out</a>
          </li>

          <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="offer.php" role="tab" aria-controls="contact" aria-selected="false">Product Offer</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="deleteproduct.php" role="tab" aria-controls="contact" aria-selected="false">Delete Product</a>
        </li>

          <li class="nav-item" style="float:right;">
          <!--<a class="nav-link" id="adminlogout" data-toggle="tab" onclick="parent.open('http://www.mohanbook.com/','_self')"  >-->
          <a class="nav-link" id="adminlogout" data-toggle="tab" href="/books_shop/index.php"  >
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

    