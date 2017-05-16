<link href="default.css" rel="stylesheet" type="text/css" />
<?php
include('dbconnect.php');
$su=mysql_query("SELECT * FROM notices") or die(mysql_error());
$count=1;
echo '<div class=notice><br><h1 align=center style="font-family:hand2;color:blue;"><blink>Recent Notices</blink></h1>';
while(($x=mysql_fetch_array($su)) && ($count<3)){
$count=$count+1;
echo '<div border:0px solid #eeeeee;font-size:13px;width:600px;"><table width=600px border=0 style="color:brown;margin-top:5px;"><tr><td style="border:1px solid magenta;padding:2px;border-radius:6px;font-size:13px;color:green;">Notice By:&nbsp;&nbsp;'.$x[0].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:&nbsp;&nbsp;'.$x[2].'</td></tr>
<tr><td style="border:1px solid;font-size:15px;font-weight:bold;padding:5px;border-radius:5px;" valign=top>'.$x[1].'.</td></tr>
</td></tr> </table></div>';}
echo '</div>';
?>

