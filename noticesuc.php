
<?php
include('dbconnect.php');
if($_GET)
$su=mysql_query("INSERT INTO notices(user,notice) VALUES('$_GET[user]','$_GET[notice]')") or die(mysql_error());
if($su)
	echo 1;
else
	echo 0;
?>

