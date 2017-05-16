<?php
include('dbconnect.php');
$su=mysql_query("SELECT * FROM updates") or die(mysql_error());
$count=mysql_num_rows($su);
$count=$count+1;
$x="INSERT INTO updates(`u_no`,`update`) VALUES($count,'$_GET[update]')";
if(mysql_query($x)) echo 1;
else echo 0;

?>

