function register(){
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("main").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","register.php",true);
xmlhttp.send();
}
function regsuccess(){
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("main").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","succes.php",true);
xmlhttp.send();
}
