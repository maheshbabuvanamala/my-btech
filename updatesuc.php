<?php
include('dbconnect.php');
$t=mysql_query("SELECT * FROM student WHERE user='$_GET[uid]'");
$a=mysql_fetch_array($t);
if($_GET['dob']==$a[5]){
$s=mysql_query("UPDATE student SET password='$_GET[npass]' where user='$_GET[uid]'");
mysql_query("UPDATE accounts SET pwd='$_GET[npass]' where user='$_GET[uid]'");
echo 1;
}
else
	echo 0;
?>
 
