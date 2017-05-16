<?php
include('dbconnect.php');
session_start();
if($_SESSION['level']==1)
{
	$user=$_SESSION['user'];
	echo'<div class=contact><center><h1><blink>User_Profile </blink> </h1>';
	$k=mysql_query("SELECT * FROM student WHERE user='$user'");
	$det=mysql_fetch_array($k);
	$user=$det['user'];
	$fname=$det['fname'];
	$lname=$det['lname'];
	$gender=$det['gender'];
	$mail=$det['Email'];
	$course=$det['course'];
	$phone=$det['phone'];
	$dob=$det['dob'];
	echo'<table border=0 ><tr><td>Username</td><td>:'. $user.'</td></tr><tr><td>Name</td><td>: '.$fname.'&nbsp;&nbsp;'.$lname.'</td></tr><tr><td>Course</td>
		<td>:' .$course.'</td></tr><tr><td>Gender</td><td>:' .$gender.'</td></tr><tr><td>Date of birth</td><td>:'. $dob.'</td>
	</tr><tr><td>Email</td><td>:'. $mail.'</td>
	</tr><tr><td>Phone</td><td>:'. $phone.'</td>
	</tr></div>';
}
if($_SESSION['level']==2)
{
	$user=$_SESSION['user'];
	echo'<div class=contact><center><h1><blink>User_Profile </blink> </h1>';
	$k=mysql_query("SELECT * FROM faculty WHERE user='$user'");
	$det=mysql_fetch_array($k);
	$user=$det['user'];
	$fname=$det['fname'];
	$lname=$det['lname'];
	$gender=$det['gender'];
	$subject=$det['subject'];
	$branch=$det['branch'];
	echo '<div class=profile><table border=0 ><tr><td>Username</td><td>:'. $user.'</td></tr><tr><td>Name</td><td>: '.$fname.'</td></tr><tr><td>Gender</td>
		<td>:' .$gender.'</td></tr><tr><td>Branch</td><td>:' .$branch.'</td></tr><tr><td>subject</td><td>:'. $subject.'</td>
	</tr></div></div>';
}
?>
