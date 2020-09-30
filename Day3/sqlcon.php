 <?php

$connect=mysqli_connect("localhost","root","") or die(mysql_error());

mysqli_select_db($connect,"phpmyadmin") or die("ERROR");

echo("DATABASE Connected");

$write=mysqli_query($connect,"Insert into test values('1','Himanshu','100000')");





 ?>


