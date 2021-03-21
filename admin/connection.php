<?php
    $servername="localhost";
    $username="Mbna";
    $pass="Mbna@2020";
    $con=mysqli_Connect($servername,$username,$pass)or die("There is some problem in mysql connection");
    $db="book_shop2020";
    $sdb=mysqli_select_db($con,$db) or die("Problem in database connection");
    
    

  ?>