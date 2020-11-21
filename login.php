<?php
$con=mysqli_connect("localhost","root","","login")
    or die (mysqli_connect_error());

    mysqli_query($con,"CREATE TABLE IF NOT EXISTS users(
      id INT NOT NULL AUTO_INCREMENT,
      PRIMARY KEY (id),
      username VARCHAR(100),
      passowrd VARCHAR(100))")
      or die (mysqli_connect_error());
mysqli_query($con,"INSERT INTO users(username,passowrd)VALUES('testuser','testuserpass')")
or die(mysqli_connect_error());


?>
