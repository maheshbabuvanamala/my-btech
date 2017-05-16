
<?php 
session_start();
	?>
<link href="default.css" rel="stylesheet" type="text/css" />
</div><link href="default.css" rel="stylesheet" type="text/css" />
<div class="contact">
<?php 
		if(isset($_SESSION['user'])&&$_SESSION['level']==1){
echo "<p>RGUKT provides six years integrated course for S.S.C toppers in A.P.	In this University every acadamecic year consists three semesters (Trisemester policy).Every semester student get his/her result by following the Realtive Grading method.Each acadamedic year grade can be calculated by using cumulative grading.Cumulative Grade is Average of SGPA's of all semesters.</p>
<p>RGUKT provides Laptop and free hostel accomodation to every student and also for faculty.Our university has many contacts with other companies and industries to provide placement for >7.5 CGPA students.<p>";		
			
echo '<center>
<h2><input type=submit value="SemRegestration"  onclick=linking("sem_reg.php") class="query1">
<center>
<div>';}
	else 
echo "<p>RGUKT provides six years integrated course for S.S.C toppers in A.P.	In this University every acadamecic year consists three semesters (Trisemester policy).Every semester student get his/her result by following the Realtive Grading method.Each acadamedic year grade can be calculated by using cumulative grading.Cumulative Grade is Average of SGPA's of all semesters.</p>
<p>RGUKT provides Laptop and free hostel accomodation to every student and also for faculty.Our university has many contacts with other companies and industries to provide placement for >7.5 CGPA students.<p>";
?>
	
</div>
