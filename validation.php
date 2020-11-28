<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
if(isset($_POST['user'])&&isset($_POST['password'])){

  $name =$_POST['user'];
  $pass =$_POST['password'];

  $query = " SELECT*FROM usertable  WHERE name='$name' && password='$pass'";
if(mysqli_num_rows(mysqli_query($con,$query))>0){
	 $_SESSION['name']=$row['name'];
   header("Location:home.php?=success");
  
}
else{
	echo"اسم المستخدم او كلمه المرور خطأه";
}

}



 ?>
