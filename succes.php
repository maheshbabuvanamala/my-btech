<?php
include('dbconnect.php');
if($_GET)
$su=mysql_query("INSERT INTO accounts(user,pwd) VALUES('$_GET[user]','$_GET[password]')") or die(mysql_error());
$su=mysql_query("INSERT INTO student(user,password,fname,lname,course,dob,gender,Email,phone) VALUES('$_GET[user]','$_GET[password]','$_GET[fname]','$_GET[lname]','$_GET[course]','$_GET[dob_d]-$_GET[dob_m]-$_GET[dob_y]','$_GET[gender]','$_GET[Email]','$_GET[Phone]')") or die(mysql_error());
if($su)
	echo 1;
?>

