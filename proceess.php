<?php
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($user);
$password = mysql_real_escape_string($pass);

mysql_connect("localhost","root","login");
mysql_select_db("login");

$result = mysql_query("select * from users where username = '$username' and password ='$password'")
        or die ("Failled to my query database ".mysql_error());
$row = mysql_fetch_array($result);
 ?>
