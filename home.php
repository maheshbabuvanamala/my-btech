<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script.js"></script>
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
	else
		echo '<div id="welcome" class="post">
			<h2 class="title"><font>Welcome to Student Home Page</blink></font></h2>
		<p>The primary objective of establishing RGUKT was to provide high 
quality educational opportunities for the aimed rural youth of Andhra 
Pradesh. The initial goal was that at least the top 1 % of the rural 
graduates would be given the opportunity to study at RGUKT.</p><p>The top 1% of rural graduates is around 6,000 to 7,000 per year. 
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
in the educational arena.</p></div><div class=home><p><a href=# onclick=linking("postquery.php")>POST QUERY</a></p></div>';
		?>
		
	</div>
