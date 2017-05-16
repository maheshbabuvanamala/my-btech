<?php
include('dbconnect.php');
$su=mysql_query("INSERT INTO semester VALUES('$_GET[uid]','$_GET[fname]','$_GET[lname]','$_GET[course]','$_GET[sub1]','$_GET[sub2]','$_GET[sub3]','$_GET[sub4]','$_GET[sub5]','$_GET[sub6]','$_GET[sub7]','$_GET[sub8]')") or die(mysql_error());
if($su)
	echo 1;
else
	echo 0;
?>

