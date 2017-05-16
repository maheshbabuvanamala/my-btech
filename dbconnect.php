
<?php
$con = mysql_connect("localhost","root","vsdm");
if(!$con){
	echo "<h1>Couldn't connect. Contact your Administrator. </h1>";
}

$db=mysql_select_db("uis");
if(!$db){
	echo "<h1>Couldn't connect your Database. Plz contact your Administrator.</h1>";
}
?>
