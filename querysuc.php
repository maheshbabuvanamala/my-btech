
<?php
include('dbconnect.php');
$su=mysql_query("SELECT * FROM queries") or die(mysql_error());
$count=mysql_num_rows($su);
$count=$count+1001;
if($_GET)
$su=mysql_query("INSERT INTO queries(user,subject,query,q_no) VALUES('$_GET[user]','$_GET[subject]','$_GET[query]',$count)") or die(mysql_error());
if($su)
	echo $count;
?>

