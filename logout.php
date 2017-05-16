
<?php
include("dbconnect.php");
session_start();
$un=$_SESSION['user'];
session_destroy();
echo "You are being redirected to the login page!<br>";
header("Refresh: 2; URL=index.php");
?>
