<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

mysqli_query($con,"CREATE TABLE IF NOT EXISTS users(
  id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id),
  username VARCHAR(100),
  passowrd VARCHAR(100))")
  or die (mysql_connect_error());

$name =$_POST['user'];
$pass =$_POST['passowrd'];




 ?>
