<link href="reg.css" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script.js"></script>
<body>
<?php 
session_start();
	?>
<center><h1>Sem Registration Form</h1>
<br>
<br>	
<span id='emsg' style="color:red;"></span>
<div style="background:url(6.png);border:1px solid gray;padding:40px;border-radius:10px;width:400px;box-shadow:0px 0px 10px blue;font-size:12px;">
<br>
<p align=left style="color:brown;"><b>Username:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input readonly=readonly  value=<?php echo $_SESSION['user'];?> name="user1" type="text" id="user1"  size="25"</p>


<p align=left style="color:brown;"><b>FirstName:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input readonly=readonly  value=<?php echo $_SESSION['fname'];?> name="fname" type="text" id="fname"  size="25" value="" placeholder="Firstname"></p>
<p align=left style="color:brown;"><b>Last Name:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input  readonly=readonly  value=<?php echo $_SESSION['lname'];?> name="lname" id="lname" size="25" value="" placeholder="LastName"></p>
<p align=left style="color:brown;"><b>Present Course:</b></p>
<select name="course" id="course">
<option value="">Select Your Course</option>
<option value="PUC">PUC</option>
<option value="Engineering">Engineering</option>
</select><br><br>
<p align=left style="color:brown;"><b>Choose Your Subjects:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold">
<input type="checkbox" name="subject" value="Physics" id=ph /> Physics<br>
<input type="checkbox" name="subject" value="Chemistry" id=ch /> Chemistry<br>
<input type="checkbox" name="subject" value="psp" id=psp />Probability<br>
<input type="checkbox" name="subject" value="flat"	id=flat /> FLAT <br>
<input type="checkbox" name="subject" value="ise"id=ise /> ISE<br>
<input type="checkbox" name="subject" value="pds" id=pds />PDS<br>
<input type="checkbox" name="subject" value="biology" id=bio /> Biology<br>
<input type="checkbox" name="subject" value="scld" id=scld /> SCLD<br>
<center>
<input type=submit value="Register"  onclick="sem_reg()" class="query1">
</center>
</div>
