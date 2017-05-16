<?session_start()?>
<link href="reg.css" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script.js"></script>
<body>
<center><h1>Send Answer</h1>
<br>
<br>	
<span id='emsg' style="color:red;"></span>
<div style="background:url(6.png);border:1px solid gray;padding:40px;border-radius:10px;width:400px;box-shadow:0px 0px 10px blue;font-size:12px;">
<br>
<p align=left style="color:brown;"><b>Username:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input readonly='readonly' value=<?echo $_SESSION['user'];?>  name="user1" type="text" id="user1"  size="25" value=""></p>
<p align=left style="color:brown;"><b>Enter Question Reference Id:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><input  name="r_id" type="text" id="r_id"  size="25" value=""></p>
<p align=left style="color:brown;"><b>Answer Here:</b></p>
<p style="border-radius:0px;border:0px solid green;color:#142C3D;font-weight:bold"><textarea rows="8" cols="450" name="ans" id="ans"   placeholder="Type Your Answer Here ..."></textarea></p>
</br>
<center>
<input type=submit value="Ans Query"  onclick="ans_query()" class="query">
</center>
<input type=submit value="Back"  onclick=linking('viewqueries.php') class="query">
</div>

