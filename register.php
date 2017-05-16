<link href="reg.css" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script.js"></script>
<body>
<center><h1>Registration Form</h1>
<br>
<br>	
<span id='emsg' style="color:red;"></span>
<div style="background:url(6.png);border:1px solid gray;padding:40px;border-radius:10px;width:400px;box-shadow:0px 0px 10px blue;font-size:12px;">
<br>
<p align=left style="color:brown;"><b>Username:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input name="user1" type="text" id="user1"  size="25"  placeholder="UserName"></p>

<p align=left style="color:brown;"><b>Password:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input type="password" name="password" id="password" size="25" value="" placeholder="Password"></p>

<p align=left style="color:brown;"><b>Confirm Password:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input type="password" name="cpassword" id="cpassword" size="25" value="" placeholder="Confirm Password"></p>

<p align=left style="color:brown;"><b>First Name:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input name="fname" type="text" id="fname"  size="25" value="" placeholder="Firstname"></p>
<p align=left style="color:brown;"><b>Last Name:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input type="text" name="lname" id="lname"size="25" value="" placeholder="LastName"></p>
<p align=left style="color:brown;"><b>Present Course:</b></p>
<select name="course" id="course">
<option value="">Select Your Course</option>
<option value="PUC">PUC</option>
<option value="Engineering">Engineering</option>
</select>
<p align=left style="color:brown;"><b>Date Of Birth:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold">
<select id="dob_d" name="dob_d" value="">
<option value=0>--Date--</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

</select>
<!---Month-->
<select id="dob_m" name="dob_m" value="">
<option value="Month">--Month--</option>
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<!---Year-->
<input name="dob_y" type="text" id="dob_y"  size="4" value="Year" placeholder="Year" value=""></p>
<p align=left style="color:brown;"><b>Gender:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold">
<select name="gender" id="gender">
<option value="">Select Your Gender</option>
<option value="Male">Male</option>
<option value="Female">Fe-Male</option>
</select>
<p align=left style="color:brown;"><b>Email Id:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input name="Email" type="text" id="Email"  size="25" value=""placeholder="Email" >Something@example.com</p>
<p align=left style="color:brown;"><b>Phone Number:</b></p>
<p style="border:1px border-radius:5px;solid green;color:#142C3D;font-weight:bold"><input name="Phone" type="text" id="Phone"  size="25" value=""placeholder="Phone Number" value="" ></p>
<center>
<input type=submit value="Sign Up"  onclick="validation()" class="submit">
</center>
</div>
