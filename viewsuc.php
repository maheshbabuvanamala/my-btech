
<?php
include('dbconnect.php');
$s=mysql_query("SELECT * FROM queries WHERE q_no='$_GET[rid]'");
$n=mysql_fetch_array($s);
if($s && ($n[5]!=''))
	echo '<div class=contact><table width=600px border=1  style="color:brown;margin:15px;"><tr><td>Reference Id</td><td>'.$n[3].'</td></tr><tr><td>Question :</td><td>'.$n[2].'</td></tr><tr><td>Answer:</td><td>'.$n[5].'</td></tr></table><center><input type=submit value="Back"  onclick=linking("viewstatus.php") class="query1"><center></div>';
else
	echo '<center><h2>Your Query Status ::<br><blink> No answer from the faculty </blink></h2><br>
	<input type=submit value="Back"  onclick=linking("viewstatus.php") class="query1"><center>';
?>
