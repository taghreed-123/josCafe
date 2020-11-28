<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

  $name =$_POST['user'];
  $pass =$_POST['password'];

  $query = " SELECT*FROM usertable  WHERE name='$name' && password='$pass'";

  $result=mysqli_query($con,$query);
$resultCheck = mysqli_num_rows($result);


if($resultCheck>0){
  header("Location:login.php?erorr=sqlerror");
  exit();
}else {
  while ($row=mysqli_fetch_assoc($result)) {
    $conditional_pass = password_verify($pass, $row['password']);
    if(!$conditional_pass){


     header("Location:landing.php?error=$conditional_pass");
     echo "string";
     exit();
  }
    session_start();
    $_SESSION['name']=$row['name'];
    header("Location:home.php?=success");
  }
}



 ?>
