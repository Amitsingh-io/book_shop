<?php
$servername="localhost";
$username="root";
$pass="";
$con=mysqli_Connect($servername,$username,$pass)or die("There is some problem in mysql connection");
$db="book_shop";
$sdb=mysqli_select_db($con,$db) or die("Problem in database connection");
$check=$_POST["check"];
//if check ==1 then login otherwise signup
if($check=='1')
{//login
    $uid=$_POST["userid"];
    $pass=$_POST["lpassword"];
    
    $sql="select* from userinfo where user_id='$uid' and password='$pass'";
    $result=mysqli_query($con,$sql);
    if($row=mysqli_fetch_array($result))
    {
        setcookie("user_id",$uid);
        setcookie("user_password",$pass);
        ///echo $row[2];//return user name
      //$row[2]="Amit Kumar Singh";
       /* $firstname = strtok($row[2], ' ');
        $fname=strtoupper(trim($firstname));*/
        $fname=$row[2];
        setcookie("user_name",$fname);
        echo  $fname;// Output: AMIT
    }
    else
    {
        echo '0';
    }
}
else if($check=='0')
{//signup
    $name=$_POST["name"];
    $userid=$_POST["userid"];//contact number
    $email=$_POST["email"];
    $password=$_POST["password"];
    //echo "signup";

    $sql="select* from userinfo where user_id='$userid'";
  $result=mysqli_query($con,$sql);
  if(mysqli_fetch_array($result))
  {
    echo '0';//user all ready registered
  }
  else
  {
    $sql="insert into userinfo(user_id,password,name,email) values('$userid','$password','$name','$email')";
    $result=mysqli_query($con,$sql);
    setcookie("user_id",$userid);
    setcookie("user_pass",$password);
    /*$firstname = strtok($name, ' ');
        $fname=strtoupper(trim($firstname));*/
        $fname=$name;
    setcookie("user_name",$fname);
    echo $fname;
  }

}//logout
else if($check=='2')
{//delete cookies
  setcookie("user_id", "", time() - 3600);
  setcookie("user_pass", "", time() - 3600);
  setcookie("user_name", "", time() - 3600);
  echo '0';
}
else if($check='3')
{// to check cookies is avaliable or not
  //echo 'check cookies';
  if(isset($_COOKIE['user_name']))
  {
    echo $_COOKIE['user_name'];
  }
  else{
    echo '1';
  }

}
//close database
mysqli_close($con);
?>
