<link href="reg.css" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script.js"></script>
<body>
<center><h1>Change Password</h1>
<br>
<span id='emsg' style="color:red;"></span>
<div style="background:url(6.png);border:1px solid gray;padding:40px;border-radius:10px;width:400px;box-shadow:0px 0px 10px blue;font-size:12px;">
<br>
<p align=left style="color:brown;"><b>USER ID:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input type="text" name="user" id="userid" size="25" value="" placeholder="UserID"></p>

<p align=left style="color:brown;"><b>Date of Birth:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input type="text" name="dob" id="dob" size="25" value="" placeholder="Date of Birth">(DD-MM-YYYY)</p>
<p align=left style="color:brown;"><b>New Password:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input type="password" name="npass" id="npass" size="25" value="" placeholder="Change your password"></p>
<p align=left style="color:brown;"><b>Confirm Password:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input type="password" name="cnpass" id="cnpass" size="25" value="" placeholder="Confirm your password"></p>
<center>
<input type=submit value="Update"  onclick="pwdupdate()" class="submit">
</center>
</div>
