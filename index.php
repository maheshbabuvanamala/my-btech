<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />



<title>RGUKT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="scripts.js"></script>
</head>
<?php 
session_start();
	?>


<br>

<div class="heada"></div>

<div id="header">
	<div id="tray">
		<ul>
			<li><a id="tray-active"href=index.php title="">Home</a></li>
			<li><a href="javascript:void(0)" onclick="linking('ad.php')" title="">Administration</a></li>
			<li><a href="javascript:void(0)" onclick="linking('dept.php')" title="">Departments</a></li>
			<li><a href="javascript:void(0)" onclick="linking('academics.php')" title="">Academics</a></li>
			<li><a href="javascript:void(0)" onclick="linking('research.php')" title="">Research</a></li>
			<li><a href="javascript:void(0)" onclick="linking('contact.php')" title="">contact</a></li>
			</ul>
    <hr class="noscreen" />
    </div> <!-- /tray -->
	</div>
</div>

<div id="content">
	<div id="sidebar">
		<?php 
		if(!isset($_SESSION['user']))
			echo '<div id="login" class="boxed">
			<h2 class="title">Login Here</h2>
			<div class="content">
					
					<fieldset>
					<legend>Sign-In</legend>
					<label >Username:</label>
					<input id="user" type="text" name="user" value="" placeholder="username"/>
					<label for="inputtext2">Password:</label>
					<input id="pwd" type="password" name="pwd" value="" placeholder="password"/>
					<input id="inputsubmit1" type="button" name="inputsubmit1"  value="Sign In" onclick="login()"/><br>
					<input type="button"   value="Register Here" onclick=linking("register.php")>
					</fieldset>
					<p><a href="javascript:void(0)" onclick=linking("updatepwd.php")>Forgot my password?</a></p>
					
			</div>
		</div>';
		else
			echo '<div id="login" class="boxed"><h2 class="title">Welcome</h2><div class="content"><fieldset><center><input type="button" class=query1  value="Profile"  onclick=linking("myprofile.php")><br><br><br><a href="logout.php"><input type="button" class=query1  value="Logout" ></a><br></fieldset></div></div>';
			
		?>
		<div id="updates" class="boxed">
			<h2 class="title">Recent Updates</h2>
			<div class="content">
				<ul><?include("dbconnect.php");$count=0;$u=mysql_query("SELECT * FROM updates");while(($x=mysql_fetch_array($u)) && ($count<3)){
					echo '<li>
						<h3>'.$x['time'].'</h3>
						<p><a href=javascript:void(0) >'.$x['update'].'</a></p>
					</li>';
					$count=$count+1;}?>
				</ul>
			</div>
		</div>
	</div>
	<div id="main">
		<?php 
		if(!isset($_SESSION['user']))
			echo '<div id="welcome" class="post">
			<h2 class="title"><font>Welcome to RGUKT Website</font></h2>
		<p>The primary objective of establishing RGUKT was to provide high 
quality educational opportunities for the aimed rural youth of Andhra 
Pradesh. The initial goal was that at least the top 1 % of the rural 
graduates would be given the opportunity to study at RGUKT.</p>
			<p>The top 1% of rural graduates is around 6,000 to 7,000 per year. 
Thus, the three campuses would need residential accommodation for about 
36,000 students for the six year integrated program.</p>
			<p>At present, most universities in India and in Andhra Pradesh 
follow the affiliated college structure model where the main role of the
 university is to set the curriculum and conduct examinations to ensure 
that the students have indeed learned the material prescribed in the 
curriculum. Most colleges have an entering class of 100-300. Having an 
entry class of 6,000 students leads to issues of scale. This is unique 
to RGUKT and is being attempted for the first time in India. In the US, 
several of the larger universities do have enrolments of 20,000 to 
30,000. However not all of them tend to be residential universities. 
Thus RGUKT, as a green field university, represents a unique experiment 
in the educational arena.</p>
	</div>';
	else if($_SESSION['level']==1)
		echo '<div id="welcome" class="post">
			<h2 class="title"><font>Welcome to Student Home Page</blink></font></h2>
		<p>The primary objective of establishing RGUKT was to provide high 
quality educational opportunities for the aimed rural youth of Andhra 
Pradesh. The initial goal was that at least the top 1 % of the rural 
graduates would be given the opportunity to study at RGUKT.</p><p>The top 1% of rural graduates is around 6,000 to 7,000 per year. 
Thus, the three campuses would need residential accommodation for about 
36,000 students for the six year integrated program.</p>
			<div class=show><input type="button" class=query1  value="PostQuery"  onclick=linking("postquery.php")>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" class=query1  value="ViewNotices"  onclick=linking("viewnotice.php")>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" class=query1  value="View Status"  onclick=linking("viewstatus.php")><div></div>';
else if($_SESSION['level']==2)
		echo '<div id="welcome" class="post">
			<h2 class="title"><font>Welcome to Faculty Home Page</blink></font></h2>
		<p>The primary objective of establishing RGUKT was to provide high 
quality educational opportunities for the aimed rural youth of Andhra 
Pradesh. The initial goal was that at least the top 1 % of the rural 
graduates would be given the opportunity to study at RGUKT.</p><p>The top 1% of rural graduates is around 6,000 to 7,000 per year. 
Thus, the three campuses would need residential accommodation for about 
36,000 students for the six year integrated program.</p>
			<div class=show><input type="button" class=query1  value="PostNotice"  onclick=linking("postnotice.php")>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" class=query1  value="ViewNotices"  onclick=linking("viewnotice.php")>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" class=query1  value="View Queries"  onclick=linking("viewqueries.php")><div></div>';
		
else if($_SESSION['level']==3)
		echo '<div id="welcome" class="post">
			<h2 class="title"><font>Welcome to admin Home Page</blink></font></h2>
		<p>The primary objective of establishing RGUKT was to provide high 
quality educational opportunities for the aimed rural youth of Andhra 
Pradesh. The initial goal was that at least the top 1 % of the rural 
graduates would be given the opportunity to study at RGUKT.</p><p>The top 1% of rural graduates is around 6,000 to 7,000 per year. 
Thus, the three campuses would need residential accommodation for about 
36,000 students for the six year integrated program.</p>
			<div class=show><center><input type="button" class=query1  value="Update Notifications"  onclick=linking("admin.php")></div>';
		?>
		
	</div>

	</body>
	<div id=footer>
	<center><font color=white>Copyright &copy; 2013 All Rights Reserved. Designed by&nbsp;&nbsp;&nbsp;<b>ThrillSeekers</b></font><center></b>
	</div>
</html>
