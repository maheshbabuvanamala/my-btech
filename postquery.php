<?session_start()?>
<link href="reg.css" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script.js"></script>
<body>
<center><h1>Post Your Question</h1>
<br>
<br>	
<span id='emsg' style="color:red;"></span>
<div style="background:url(6.png);border:1px solid gray;padding:40px;border-radius:10px;width:400px;box-shadow:0px 0px 10px blue;font-size:12px;">
<br>
<p align=left style="color:brown;"><b>Username:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input readonly='readonly' value=<?echo $_SESSION['user'];?>  name="user1" type="text" id="user1"  size="25" value=""></p>

<p align=left style="color:brown;"><b>Question:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><textarea rows="8" cols="450" name="query" id="query"   placeholder="Type Your Query Here ..."></textarea></p>
<p align=left style="color:brown;"><b>Subject:</b></p>
<select id="subject" name="subject" value="">
<option value="">--Subject--</option>
<option value="ISE">Software Engineering</option>
<option value="SCLD">SCLD</option>
<option value="PSP">Probability</option>
<option value="FLAT">FLAT</option>
</select>
</br>
<center>
<input type=submit value="Post Query"  onclick="query()" class="query1">
</center>
</div>
