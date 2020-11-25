<?php
session_start();
header('locatin:login.php');


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name =$_POST['user'];
$pass =$_POST['password'];



$s =" select *from usertable where name='$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num ==1){
   echo "username Already Taken";
}else{
  $reg ="insert into usertable(name,passowrd) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "<script type='text/javascript'>alert('تم دخولك للسحب')</script>";
}

 ?>
