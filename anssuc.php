<?php
include('dbconnect.php');
$s=mysql_query("UPDATE queries SET answer='$_GET[ans]' where q_no='$_GET[rid]'");
if($s)
	echo 1;
else
	echo 0;
?>
