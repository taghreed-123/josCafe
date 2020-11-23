<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

  $name =$_POST['user'];
  $pass =$_POST['passowrd'];

  $s = "select * from users where name = '$name' && password = '$pass'";

  $result = mysqli_query($con ,$c);

  $num = mysqli_num_rows($result);
  if($num ==1){
    header('location:home.php');
  }else{
    header('location:login.php');
 ?>
