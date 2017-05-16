<link href="default.css" rel="stylesheet" type="text/css" />
<?php
session_start();
$sub=$_SESSION['user'];
include('dbconnect.php');
$qu=mysql_query("SELECT * FROM queries") or die(mysql_error());
$fa=mysql_query("SELECT * FROM faculty WHERE user='$sub'") or die(mysql_error());
$y=mysql_fetch_array($fa);
echo '<div class=notice><br><h1 align=center style="font-family:hand2;color:blue;"><blink>Queries</blink></h1>';
while($x=mysql_fetch_array($qu)){
	if (($x[1]==$y['subject'])){
		echo '<div border:1px solid #eeeeee;font-size:13px;width:600px;"><table width=600px border=0 style="color:brown;margin-top:5px;"><tr><td colspan=2 style="border:1px solid magenta;padding:2px;border-radius:6px;font-size:13px;color:green;">Posted By:&nbsp;&nbsp;'.$x[0].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reference Id:&nbsp;'.$x['q_no'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:&nbsp;&nbsp;'.$x['time'].'</td></tr>
<tr><td style="border:1px solid;font-size:15px;font-weight:bold;padding:5px;border-radius:5px;" valign=top width=500>'.$x[2].'</td><td style="border:1px solid;font-size:15px;font-weight:bold;padding:5px;border-radius:5px;"><input type="button" class=query1 onclick=linking("ansquery.php") value="AnswerQuery" ></td></tr>
</td></tr> </table></div>';}
}

?>

