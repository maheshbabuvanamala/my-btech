var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
function linking(link){
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("main").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET",link,true);
xmlhttp.send();
}

/* Used for cheking and creat user name */
function validation()
{	
	var fname=document.getElementById('fname').value;
	var pass=document.getElementById('password').value;
	var cpass=document.getElementById('cpassword').value;
	
	
	var user1=document.getElementById('user1').value;
	var lname=document.getElementById('lname').value;
	
	var course=document.getElementById('course').value;
	
	var day=document.getElementById('dob_d').value;

	var month=document.getElementById('dob_m').value;

	var year=document.getElementById('dob_y').value;
	
	var gender=document.getElementById('gender').value;
	
	var mail=document.getElementById('Email').value;
	var atpos=mail.indexOf("@");
	var dotpos=mail.lastIndexOf(".");
	var phone=document.getElementById('Phone').value;
	if(user1=="")	
		document.getElementById("emsg").innerHTML='<blink><b>User ID is Missing</b></blink>';
	else if(pass=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter Password</b></blink>';
	else if(cpass=="")
		document.getElementById("emsg").innerHTML='<blink><b>Conform your password</b></blink>';
	else if(pass!=cpass)
		document.getElementById("emsg").innerHTML='<blink><b>Password not match</b></blink>';
	else if(fname=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter First Name</b></blink>';
	else if(lname=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter last name</b></blink>';
	else if(course=="")
		document.getElementById("emsg").innerHTML='<blink><b>Select your course</b></blink>';
	else if(day=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter your Date of Birth</b></blink>';
	else if(month=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter your Date of Birth</b></blink>';
	else if(year=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter your Date of Birth</b></blink>';
	else if(gender=="")
		document.getElementById("emsg").innerHTML='<blink><b>Select Your Gender</b></blink>';
	else if(mail=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter mail address</b></blink>';
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length)
	
	document.getElementById("emsg").innerHTML="<blink>Invalid e-mail address</blink>";
 
	else if(phone=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter Your Phone number</b></blink>';
	else
	{
		open(user1,pass,fname,lname,course,day,month,year,gender,mail,phone);
	}
}
function open(user,pass,fname,lname,course,day,month,year,gender,mail,phone)
{
	var url="succes.php?user="+user+"&password="+pass+"&fname="+fname+"&lname="+lname+"&course="+course+"&dob_d="+day+"&dob_m="+month+"&dob_y="+year+"&gender="+gender+"&Email="+mail+"&Phone="+phone;
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	function stateChanged()

	{
		if (xmlhttp.readyState==4)
			if(xmlhttp.responseText==1)
				document.getElementById("main").innerHTML='<h1><blink><b>Successfully Registered</b></blink></h1>';
					}
}
function pwdupdate()
{
	var uid=document.getElementById('userid').value;
	var dob=document.getElementById('dob').value;
	var npass=document.getElementById('npass').value;
	var cnpass=document.getElementById('cnpass').value;
	

	if(uid=="")	
		document.getElementById("emsg").innerHTML='<blink><b>User ID is Missing</b></blink>';
	else if(dob=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter your Date of Birth</b></blink>';
	else if(npass=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter  your New password</b></blink>';
	else if(cnpass=="")
		document.getElementById("emsg").innerHTML='<blink><b>Conform your password</b></blink>';
	else if(npass!=cnpass)
		document.getElementById("emsg").innerHTML='<blink><b>Password not match</b></blink>';
	else
	{
		check(uid,dob,npass);
	}
}
function check(uid,dob,npass)
{
	var url="updatesuc.php?uid="+uid+"&npass="+npass+"&dob="+dob;
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	function stateChanged()

	{
		if (xmlhttp.readyState==4)
			if(xmlhttp.responseText==1)
				document.getElementById("main").innerHTML='<h1><blink><b>Password Changed Successfully</b></blink></h1>';
			if(xmlhttp.responseText==0)
				document.getElementById("main").innerHTML='<h1><blink><b> Wrong Username/Date of Birth</b></blink></h1>';
					}
}

	
function login(){
	user=document.getElementById('user').value;
	pass=document.getElementById('pwd').value;
	loginr=new XMLHttpRequest();
	loginr.onreadystatechange=function()
  {
  if (loginr.readyState==4 && loginr.status==200)
    {	
		if (loginr.responseText==1){
			document.getElementById('main').innerHTML='<div id="welcome" class="post"><h2 class="title"><font>Welcome to Student Home Page</blink></font></h2><p>The primary objective of establishing RGUKT was to provide high quality educational opportunities for the aimed rural youth of Andhra Pradesh. The initial goal was that at least the top 1 % of the rural graduates would be given the opportunity to study at RGUKT.</p><p>The top 1% of rural graduates is around 6,000 to 7,000 per year. Thus, the three campuses would need residential accommodation for about 36,000 students for the six year integrated program.</p><div class=show><input type="button" class=query1  value="PostQuery"  onclick=linking("postquery.php")>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class=query1  value="ViewNotices"  onclick=linking("viewnotice.php")>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class=query1  value="View Status"  onclick=linking("viewstatus.php")><div></div>';
			document.getElementById('login').innerHTML='<div id="login" class="boxed"><h2 class="title">Welcome</h2><div class="content"><fieldset><center><input type="button" class=query1  value="Profile"  onclick=linking("myprofile.php")><br><br><br><a href="logout.php"><input type="button" class=query1  value="Logout" ></a><br></fieldset></div></div>';
		}
		else if(loginr.responseText==2){
		document.getElementById('main').innerHTML='<div id="welcome" class="post"><h2 class="title"><font>Welcome to Faculty Home Page</blink></font></h2><p>The primary objective of establishing RGUKT was to provide high quality educational opportunities for the aimed rural youth of Andhra Pradesh. The initial goal was that at least the top 1 % of the rural graduates would be given the opportunity to study at RGUKT.</p><p>The top 1% of rural graduates is around 6,000 to 7,000 per year. Thus, the three campuses would need residential accommodation for about 36,000 students for the six year integrated program.</p><div class=show><input type="button" class=query1  value="PostNotice"  onclick=linking("postnotice.php")>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class=query1  value="ViewNotices"  onclick=linking("viewnotice.php")>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class=query1  value="View Queries"  onclick=linking("viewqueries.php")><div></div>';
		document.getElementById('login').innerHTML='<div id="login" class="boxed"><h2 class="title">Welcome</h2><div class="content"><fieldset><center><input type="button" class=query1  value="Profile"  onclick=linking("myprofile.php")><br><br><br><a href="logout.php"><input type="button" class=query1  value="Logout" ></a><br></fieldset></div></div>';
			}
		else if(loginr.responseText==3){
		document.getElementById('main').innerHTML='<div id="welcome" class="post"><h2 class="title"><font>Welcome to admin Home Page</blink></font></h2><p>The primary objective of establishing RGUKT was to provide high quality educational opportunities for the aimed rural youth of Andhra Pradesh. The initial goal was that at least the top 1 % of the rural graduates would be given the opportunity to study at RGUKT.</p><p>The top 1% of rural graduates is around 6,000 to 7,000 per year. Thus, the three campuses would need residential accommodation for about 36,000 students for the six year integrated program.</p><div class=show><center><input type="button" class=query1  value="Update Notifications"  onclick=linking("admin.php")></div>';
		document.getElementById('login').innerHTML='<div id="login" class="boxed"><h2 class="title">Welcome</h2><div class="content"><fieldset><center><input type="button" class=query1  value="Profile"  onclick=linking("myprofile.php")><br><br><br><a href="logout.php"><input type="button" class=query1  value="Logout" ></a><br></fieldset></div></div>';
			}
		else
			document.getElementById('main').innerHTML='<h1><blink><b> Wrong Username/Password</b></blink></h1>';
			
    }
  }
loginr.open("GET","login.php?user="+user+"&pwd="+pass,true);
loginr.send();
}
function query(){
	user=document.getElementById('user1').value;
	query=document.getElementById('query').value;
	subject=document.getElementById('subject').value;
	loginr=new XMLHttpRequest();
	loginr.onreadystatechange=function()
  {
  if (loginr.readyState==4 && loginr.status==200)
    {
		if (loginr.responseText){
			document.getElementById('main').innerHTML='<div class=contact><center><h2>Query Successfully Posted<br><br>Your Reference Id ::<font color=red>'+loginr.responseText+'</font><br><br>Remember this Id  Further Details<h2><center><div><center><a href="index.php"><input type=submit value="Back"  class="query1"></a></center>';
			
		}
		else
			document.getElementById('main').innerHTML='Try again...Query is not posted';
			
    }
  }
loginr.open("GET","querysuc.php?user="+user+"&subject="+subject+"&query="+query,true);
loginr.send();
}
function notice(){
	user=document.getElementById('user1').value;
	notice=document.getElementById('notice').value;
	loginr=new XMLHttpRequest();
	loginr.onreadystatechange=function()
	
  {
	
  if (loginr.readyState==4)
    {	
		if (loginr.responseText==1 && loginr.status==200)
			document.getElementById('main').innerHTML='<h1><blink><b>Notice  Posted Successfully</b></blink></h1>';
		else
			document.getElementById('main').innerHTML='<h1><blink><b>Try again...Query is not posted</b></blink></h1>';
			
    }
  }

loginr.open("GET","noticesuc.php?user="+user+"&notice="+notice,true);
loginr.send();
}

function ans_query()
{	
	var uid=document.getElementById('user1').value;
	var rid=document.getElementById('r_id').value;
	var ans=document.getElementById('ans').value;
	if(rid=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter Question Reference Id</b></blink>';
	else if(ans=="")
		document.getElementById("emsg").innerHTML='<blink><b>Answer Should Not be LeftBlank.</b></blink>';
	else
	{
		answer(uid,rid,ans);
	}
}
function answer(uid,rid,ans)
{
	var url="anssuc.php?uid="+uid+"&ans="+ans+"&rid="+rid;
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	function stateChanged()

	{	
		if (xmlhttp.readyState==4){
			if(xmlhttp.responseText==1)
				document.getElementById("main").innerHTML='<h1><blink><b>Answer Sent Successfully</b></blink></h1>';
					}
	}
}

function viewstatus()
{	
	
	var rid=document.getElementById('rid').value;
	
	if(rid=="")
		document.getElementById("emsg").innerHTML='<blink><b>Enter Question Reference Id</b></blink>';
	else
	{
		view(rid);
	}
}
function view(rid)
{
	var url="viewsuc.php?rid="+rid;
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	function stateChanged()

	{	
		if (xmlhttp.readyState==4){
			if(xmlhttp.responseText)
				document.getElementById("main").innerHTML=xmlhttp.responseText;
					}
	}
}

function sem_reg()
{	
	var uid=document.getElementById('user1').value;
	var fname=document.getElementById('fname').value;
	var lname=document.getElementById('lname').value;
	var course=document.getElementById('course').value;
	var sub1=document.getElementById('ph').value;
	var sub2=document.getElementById('ch').value;
	var sub3=document.getElementById('psp').value;
	var sub4=document.getElementById('flat').value;
	var sub5=document.getElementById('ise').value;
	var sub6=document.getElementById('pds').value;
	var sub7=document.getElementById('bio').value;
	var sub8=document.getElementById('scld').value;
	

	if(course=="")
		document.getElementById("emsg").innerHTML='<blink><b>Chooose Your Course</b></blink>';
	else
	{	
		sem(uid,fname,lname,course,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8);
	}
}
function sem(uid,fname,lname,course,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8)
{
	var url="semsuc.php?uid="+uid+"&fname="+fname+"&lname="+lname+"&course="+course+"&sub1="+sub1+"&sub2="+sub2+"&sub3="+sub3+"&sub4="+sub4+"&sub5="+sub5+"&sub6="+sub6+"&sub7="+sub7+"&sub8="+sub8;
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	function stateChanged()

	{
		if (xmlhttp.readyState==4)
			if(xmlhttp.responseText==1)
				document.getElementById("main").innerHTML='<h1><blink><b>Sem Registration Completed Successfully</b></blink></h1>';
			if(xmlhttp.responseText==0)
				document.getElementById("main").innerHTML='<h1><blink><b> Not Yet Registered Try again</b></blink></h1>';
					}
}
function admin_update()
{	
	
	var upda=document.getElementById('admin_notice').value;
	alert(upda);
	if(upda==""){
		
		document.getElementById("emsg").innerHTML='<blink><b>Updates Field Should not be left Blank</b></blink>';}
	else
	{	
		admin(upda);
	}
}
function admin(upda)
{	
	var url="adminsuc.php?update="+upda;
	
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	function stateChanged()

	{	
		if (xmlhttp.readyState==4){
			alert(xmlhttp.responseText);
			if(xmlhttp.responseText==1)
				
				document.getElementById("main").innerHTML="<h1><blink><b>Updates are Inserted Successfully</b></blink></h1>";
					}
	}
}

