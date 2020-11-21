<?php
$username = $_POST['username'];
$password = $_POST['passowrd'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);

$con=mysqli_connect("localhost","root","")
mysqli_select_db("login")
    or die (mysqli_connect_error());

    mysqli_query($con,"CREATE TABLE IF NOT EXISTS users(
      id INT NOT NULL AUTO_INCREMENT,
      PRIMARY KEY (id),
      username VARCHAR(100),
      passowrd VARCHAR(100))")
      or die (mysql_connect_error());


$result = mysqli_query("select * from users where username = '$username' and password ='$password'")
        or die ("Failled to my query database ".mysqli_error());
$row = mysqli_fetch_array($result);
 ?>
