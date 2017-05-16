<?php
include('dbconnect.php');
$user=$_GET['user'];
$pwd=$_GET['pwd'];
$s=mysql_query("SELECT * FROM accounts WHERE user='$user' AND pwd='$pwd'") or die(mysql_error());
$x=mysql_fetch_array($s);
if(mysql_num_rows($s)==1){
	$p=mysql_query("SELECT * FROM student WHERE user='$user' ") or die(mysql_error());
	$z=mysql_fetch_array($p);
	session_start();
	$_SESSION['user']=$user;
	$_SESSION['level']=$x[2];
	$_SESSION['fname']=$z[2];
	$_SESSION['lname']=$z[3];
	if ($_SESSION['level']==1)
		echo 1;
	else if($_SESSION['level']==2)
		echo 2;
	else 
		echo 3;
}
else
	echo 0;
?>
